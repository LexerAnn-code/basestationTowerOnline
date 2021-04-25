<?php


$fn = "status.php";
$f= file_get_contents($fn);
if($f==1){
   


$json = file_get_contents('php://input');
$data = json_decode($json);


$key= $data->key;
$username = $data->deviceDesc->username;
$password = $data->deviceDesc->password;
$rulesetId = $data->deviceDesc->rulesetIDs;

$output=shell_exec("sh forward_initial.sh  $key $username $password $rulesetId"); //Execute forward message script with json encoded data

 $resp = json_decode($output);
 $w =  $resp->isValid;

$fs = "config2.cfg";
$fi= file_get_contents($fs);


    $pos = strpos($w, "True");
    if ($pos === false) {

    	echo "Validation failed.";
 	echo "$output";


      
    } else {
       


 $serialNumber = $resp->data->serialNumber;
 $deviceId = $resp->data->deviceId;
 $username = $resp->data->username;
 $modelId = $resp->data->modelId;
 $manufacturerId = $resp->data->manufacturerId;
 $region = $resp->data->region;
 $district = $resp->data->district;
 $operator = $resp->data->operator;
$deviceType= $resp->data->deviceType;

 $latitude = $resp->data->latitude;
 $longitude = $resp->data->longitude;
 $antennaheight = $resp->data->antennaheight;
 $sp = "avaliable Spectrums";
$antennaheighttype =$resp->data->antennaheighttype;
 $available_chan = $resp->$sp;



 echo "Succesful Validation of Client Device.<br>";
$array_send = <<<EOT
  
  Serial_Number=$serialNumber<br>
  Device_Id=$deviceId<br>
  Username=$deviceId<br>
  Model_Id=$modelId<br>
  Manufacturer_Id=$manufacturerId<br>
  Region=$region<br>
  District=$district<br>
  Operator=$operator<br>
    Latitude=$latitude<br>
  Longitude=$longitude<br>
  Antenna_Height=$antennaheight<br>
  Device_Type=$deviceType<br>
  Antenna_Height_Type=$antennaheighttype<br>
   Available_Channels=$available_chan<br>
   Master=$fi<br>
EOT;
echo $array_send;
    }


   }
else{
   echo "Basestation is offline";
}
?>
