<script>
        function showConfirm(id){
        window.location = "updateData.php?delete=" + id;
    }
</script>
<?php

class controller {
    function ConnectionSql($sql)
    {
        $conn = mysqli_connect("localhost","root","","covid");
        $result = mysqli_query($conn, $sql);
        $conn->close();
        return $result;
    }
    function InsertTemp($name,$mobile)
    {
        
        $sql= "UPDATE temp SET name='$name',mobile='$mobile' WHERE 1";
                $this->ConnectionSql($sql);
    }
    function RevTemp($info)
    {
        
        $sql= "SELECT ".$info." FROM temp";
        $result=$this->ConnectionSql($sql);
        $data = mysqli_fetch_assoc($result);
        
        return implode(" ", $data);
    }
    function InsertNTH($name,$mobile,$adult,$child,$address,$city,$district,$pin)
    {
        $id=0;
        $result=$this->ConnectionSql("SELECT id FROM nth");
        while($row = mysqli_fetch_assoc($result))
            {   
                $id =$row['id'];
            }
            $id++;
            $sql= "INSERT INTO nth(id,name, mobile, adult, child, address, city, district, PIN, status)"
                . " VALUES ('$id','$name','$mobile','$adult','$child','$address','$city','$district','$pin','UN-SEEN')";
                $this->ConnectionSql($sql);
        $result=$this->ConnectionSql("SELECT id FROM nth WHERE mobile='$mobile'");
        $row = mysqli_fetch_assoc($result);
        echo "<script>alert('".$name." your Token No. ".$row['id']."')</script>";
    }   
    function check()
    {
        $id="";
        $result=$this->ConnectionSql("SELECT id FROM nth");
        while($row = mysqli_fetch_assoc($result))
            {   
                $id =$row['id'];
            }
            echo $id;
    }
    function OverViewDate($result)
    {
            $i = array();
            $data="";
            while($row = mysqli_fetch_assoc($result))
            {   
                $id =$row['id'];
                $info="<tr>
                <td><a href='#' onclick='showConfirm($id)'>Help</a></td>
                <td>".$row['id']."</td>
                <td>".$row['name']."</td>
                <td>".$row['mobile']."</td>
                <td>".$row['adult']."</td>                        
                <td>".$row['child']."</td>                        
                <td>".$row['address']."</td>
                <td>".$row['status']."</td>
                </tr>";
                array_push($i,$info);
            }
            $data = $data.implode("", $i);
            return $data;
            
    }    
    function QuaryTable()
    {
            $sql = "";
            if(isset($_POST['next2']))
            {
                 $type = $_POST['search'];
                 $search=$_POST["'".$type."'"];
                  if($search == '' || $search == 'All')
                 {
                      $sql = "SELECT * FROM nth";
                 }
                 else
                 {
                      $sql="SELECT * FROM nth WHERE ".$type." = '$search'";
                   }
            }
            else
            {
                $sql = "SELECT * FROM nth";
            }
            return $sql;
    }   
    function updateNTH($id)
    {
        $sql='UPDATE nth SET status="SEEN" WHERE id="'.$id.'"';
        $this->ConnectionSql($sql);
    }
    function InsertWHT($id){
        $name=$this->RevTemp("name");
        $mobile=$this->RevTemp("mobile");
        $toke=$id;
        $sql="INSERT INTO wth(name, mobile, token) VALUES ('".$name."','".$mobile."','".$toke."')";
        $this->ConnectionSql($sql);
       }
        
        
        
        
        
        
        
}
