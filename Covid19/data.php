<?php
function is_connected(){
    $connected = @fsockopen("www.google.com",80);
    if($connected){
        $is_conn=true;
        fclose($connected);
    }
    else{
        $is_conn = false;
    }
    return $is_conn;
}
    $total_confirmed = 0;
    $total_recovered = 0;
    $total_deaths = 0;
    $confirm = 0;
    $recover = 0;
    $death = 0;
    $date="Never Happend";        
if(is_connected()){
  $jsonData = file_get_contents("https://pomber.github.io/covid19/timeseries.json");
        $data = json_decode($jsonData, true);
        if($data!=null)
        {
            foreach($data as $key => $value)
            {
                $days_count = count($value)-1;
                if($key == "India")
                {
                    $confirm =  $value[$days_count]['confirmed'];
                    $recover = $value[$days_count]['recovered'];
                    $death = $value[$days_count]['deaths'];
                }
                foreach($data as $key => $value)
                {
                    $total_confirmed = $total_confirmed + $value[$days_count]['confirmed'];
                    $total_recovered = $total_recovered + $value[$days_count]['recovered'];
                    $total_deaths = $total_deaths + $value[$days_count]['deaths'];
                }
            }
            $date = $value[$days_count]['date'];
        }
   
}
else{
    echo "<script>alert('Please Have an Internet Connection')</script>";
}
$data='<h1 class="sbheading">Cases of India</h1>
                <table class="sbtable">
                    <tr>
                        <th>Active Cases</th>
                        <td>'.$confirm.'</td> 
                    </tr>
                    <tr>
                        <th>Cured/Discharged</th>
                        <td>'.$recover.'</td>
                    </tr>
                    <tr>
                        <th>Deaths</th>
                        <td>'.$death.'</td>
                    </tr>
                </table>
                <h2 class="sbheading">All Cases of the World</h2>
                <table class="sbtable">
                    <tr>
                        <th>Active Cases</th>
                        <td>'.$total_confirmed.'</td> 
                    </tr>
                    <tr>
                        <th>Cured/Discharged</th>
                        <td>'.$total_recovered.'</td>
                    </tr>
                    <tr>
                        <th>Deaths</th>
                        <td>'.$total_deaths.'</td>
                    </tr>
                </table>
                <h9>Last updated on '.$date.'</h9>
                <h5>For more  
                    <a href="https://www.arcgis.com/apps/opsdashboard/index.html#/bda7594740fd40299423467b48e9ecf6" 
                       target="_blank">Visit</a></h5>';