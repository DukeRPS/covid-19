<?php
  $jsonData = file_get_contents("https://pomber.github.io/covid19/timeseries.json");
        $data = json_decode($jsonData, true);
        $total_confirmed = 0;
        $total_recovered = 0;
        $total_deaths = 0;
        $confirm = 0;
        $recover = 0;
        $death = 0;
        $date="Never Happend";
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
   
