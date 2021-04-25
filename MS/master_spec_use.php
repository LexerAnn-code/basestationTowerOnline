<?php

$fn = "status.php";
$f= file_get_contents($fn);
if($f==1){


$json = file_get_contents('php://input');
$data = json_decode($json);


$timestamp= $data->timestamp;
$username = $data->deviceDesc->username;
$ID = $data->spectra[0]->ID;
$rulesetId = $data->deviceDesc->rulesetIDs;

$output=shell_exec("sh forward_spec_use.sh  $timestamp $rulesetId $username $ID"); //Execute forward message script with json encoded data

 $resp = json_decode($output);
echo "$output";

}
else{
    echo"BaseStation is offline";
}





?>
