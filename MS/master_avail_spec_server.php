<?php


$fn = "status.php";
$f= file_get_contents($fn);
if($f==1){

$json = file_get_contents('php://input');
$data = json_decode($json);


$rulesetIDs = $data->deviceDesc->rulesetIDs;
$username = $data->deviceDesc->username;
$password = $data->deviceDesc->password;
$latitude = $data->location->latitude;
$longitude = $data->location->longitude;



$output=shell_exec("sh forward_avail_spec.sh  $latitude $longitude"); //Execute forward message script 


 $resp = json_decode($output);
  $timestamp=$resp->timestamp;

 if($timestamp == true)
 {


 $rulesetInfo=$resp->spectrumSpecs->rulesetInfo;
 $startTime=$resp->spectrumSpecs->spectrumSchedules->eventTime->startTime;
 $stopTime=$resp->spectrumSpecs->spectrumSchedules->eventTime->stopTime;

 $ID=$resp->spectrumSpecs->spectrumSchedules->Spectrum[0]->ID;
 $Transmitter_Name=$resp->spectrumSpecs->spectrumSchedules->Spectrum[0]->Transmitter_Name;
 $Region=$resp->spectrumSpecs->spectrumSchedules->Spectrum[0]->Region;
 $RF_channel=$resp->spectrumSpecs->spectrumSchedules->Spectrum[0]->RF_channel;
 $TV_Band_Number=$resp->spectrumSpecs->spectrumSchedules->Spectrum[0]->TV_Band_Number;
 $Transmit_lat=$resp->spectrumSpecs->spectrumSchedules->Spectrum[0]->Transmit_lat;
 $Transmit_long=$resp->spectrumSpecs->spectrumSchedules->Spectrum[0]->Transmit_long;
 $Channel_BW=$resp->spectrumSpecs->spectrumSchedules->Spectrum[0]->Channel_BW;
 $Lower_Frequency=$resp->spectrumSpecs->spectrumSchedules->Spectrum[0]->Lower_Frequency;
 $Center_Frequency=$resp->spectrumSpecs->spectrumSchedules->Spectrum[0]->Center_Frequency;
 $Upper_Frequency=$resp->spectrumSpecs->spectrumSchedules->Spectrum[0]->Upper_Frequency;
 $Transmit_Power=$resp->spectrumSpecs->spectrumSchedules->Spectrum[0]->Transmit_Power_kW;
 $Antenna_height=$resp->spectrumSpecs->spectrumSchedules->Spectrum[0]->Antenna_height;
 $Transmit_distance=$resp->spectrumSpecs->spectrumSchedules->Spectrum[0]->Transmit_distance;
 $created_at=$resp->spectrumSpecs->spectrumSchedules->Spectrum[0]->created_at;



 	$array_send = <<<EOT
  
 timestamp=$timestamp<br>
  rulesetInfo=$rulesetInfo<br>
 startTime=$startTime<br>
  stopTime=$stopTime<br>
  Channel=$RF_channel<br>
  ID=$ID<br>
  Transmitter_Name=$Transmitter_Name<br>
  Channel_BW=$Channel_BW<br>
  Transmit_lat=$Transmit_lat<br>
  Transmit_long=$Transmit_long<br>
  Transmit_Power=$Transmit_Power<br>
  Tranmsit_distance=$Transmit_distance<br>

 
EOT;
echo $array_send;
 }else{
 	echo "failed.<br>";
 		$array_send = <<<EOT
   stopTime=0<br>
   Channel=0<br>
  
EOT;
echo $array_send;
 }



}
else{
  echo"Basestation is offline";
}

?>
