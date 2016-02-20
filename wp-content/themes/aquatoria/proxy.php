<?php

$url="http://export.yandex.ru/weather-ng/forecasts/33929.xml";
$ch = curl_init();
$timeout = 0;
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
$file_contents = curl_exec($ch);
curl_close($ch);

$xml = simplexml_load_string($file_contents);

$weather['curr_temp']=(int)$xml->fact->temperature;
$weather['curr_icon']=(string)$xml->fact->{'image-v3'};
$weather['curr_text']=(string)$xml->fact->weather_type;
$weather['day_htemp']=(string)$xml->informer->temperature[0];
$weather['day_ltemp']=(string)$xml->informer->temperature[1];

if ($weather['curr_temp']>0) {$weather['curr_temp']='+'.$weather['curr_temp'];}
$day = 5;
for ($i = 0; $i < $day; $i++) {
	$weather['forecast'][$i]['day_text']       = (string)$xml->day[$i]->day_part[1]->weather_type;
	$weather['forecast'][$i]['day_date']       = (string)$xml->day[$i]->attributes();
	$weather['forecast'][$i]['day_icon']       = (string)$xml->day[$i]->day_part->{'image-v3'};
	$weather['forecast'][$i]['day_htemp']      = (int)$xml->day[$i]->day_part[1]->temperature_to;
	$weather['forecast'][$i]['day_ltemp']      = (int)$xml->day[$i]->day_part[1]->temperature_from;
}
echo json_encode($weather);
?>
