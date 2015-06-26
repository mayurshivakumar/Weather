<?php
$weather = file_get_contents('http://api.wunderground.com/api/Your_wunderground_Api_Key/hourly/q/CA/Your_City.json');
$decoded = json_decode($weather, true);
$count = 0;
foreach ($decoded['hourly_forecast'] as $value)
{
    $count++;
    
    $hour = $value['FCTTIME']['civil'];
    $temp = $value['temp']['english'];
    $condition = $value['condition'];
    $feels_like = $value['feelslike']['english'];
    $snow = $value['snow']['english'];
    
    echo "\r\n";
    echo 'Time: '.$hour.',  ';
    echo 'Temp: '.$temp.',  ';
    echo 'Condition: '.$condition.',  ';;
    echo 'FeelsLike: '.$feels_like.' and  ';
    echo 'Snow: '.$snow."\r\n";
    
    if ($count > 11)
        break;
}
