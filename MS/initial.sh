#!/bin/sh
user=$1
password=$2

curl --header "Content-Type: application/json" --request POST --data '{"deviceDesc": {"rulesetIDs": "57c8e0e9-dbf9-314a-b985-ea431ec6b6f6","password":"'"$2"'","username":"'"$1"'"},"key":"master"}' https://safe-basin-01006.herokuapp.com/api/device_valid >Master_init_resp.html

 > config.cfg
 > config2.cfg
# status1=$(cat slave_init_resp.html | grep -o "Succesful Validation of Client Device")
# status2=$(cat slave_init_resp.html | grep -o "Validation failed")



serialNumber=$(cat Master_init_resp.html | sed -n 's|.*"serialNumber":"\([^"]*\)".*|\1|p' | cut -d "=" -f 2 )
isValid=$(cat Master_init_resp.html | sed -n 's|.*"isValid":"\([^"]*\)".*|\1|p' | cut -d "=" -f 2 )
Manufacturer_ID=$(cat Master_init_resp.html | sed -n 's|.*"manufactureId":"\([^"]*\)".*|\1|p' | cut -d "=" -f 2 )
Model_ID=$(cat Master_init_resp.html | sed -n 's|.*"modelId":"\([^"]*\)".*|\1|p' | cut -d "=" -f 2 )
region=$(cat Master_init_resp.html | sed -n 's|.*"region":"\([^"]*\)".*|\1|p' | cut -d "=" -f 2 )
district=$(cat Master_init_resp.html | sed -n 's|.*"district":"\([^"]*\)".*|\1|p' | cut -d "=" -f 2 )
operator=$(cat Master_init_resp.html | sed -n 's|.*"operator":"\([^"]*\)".*|\1|p' | cut -d "=" -f 2 )
radiatedpower=$(cat Master_init_resp.html | sed -n 's|.*"radiatedpower":"\([^"]*\)".*|\1|p' | cut -d "=" -f 2 )
conductedpower=$(cat Master_init_resp.html | sed -n 's|.*"conductedpower":"\([^"]*\)".*|\1|p' | cut -d "=" -f 2 )
transmitter_power=$(cat Master_init_resp.html | sed -n 's|.*"transmitter_power":"\([^"]*\)".*|\1|p' | cut -d "=" -f 2 )
latitude=$(cat Master_init_resp.html | sed -n 's|.*"latitude":"\([^"]*\)".*|\1|p' | cut -d "=" -f 2 )
longitude=$(cat Master_init_resp.html | sed -n 's|.*"longitude":"\([^"]*\)".*|\1|p' | cut -d "=" -f 2 )
antennaheight=$(cat Master_init_resp.html | sed -n 's|.*"antennaheight":"\([^"]*\)".*|\1|p' | cut -d "=" -f 2 )
antennaheighttype=$(cat Master_init_resp.html | sed -n 's|.*"antennaheighttype":"\([^"]*\)".*|\1|p' | cut -d "=" -f 2 )
available_spectrum=$(cat Master_init_resp.html | sed -n 's|.*"available spectrums":"\([^"]*\)".*|\1|p' | cut -d "=" -f 2 )
name=$(cat Master_init_resp.html | sed -n 's|.*"username":"\([^"]*\)".*|\1|p' | cut -d "=" -f 2 )


echo "serialNumber=$serialNumber" >> config.cfg
echo "isValid=$isValid" >> config.cfg

echo "Username=$user" >> config.cfg
echo "Password=$2">>config.cfg
echo "Operator=$operator" >> config.cfg
echo "Manufacturer_ID=$Manufacturer_ID" >> config.cfg
echo "Model_ID=$Model_ID" >> config.cfg
echo "Region=$region" >> config.cfg
echo "District=$district" >> config.cfg
echo "Longitude=$longitude" >> config.cfg
echo "Latitude=$latitude" >> config.cfg
echo "Antennaheight=$antennaheight" >> config.cfg
echo "Radiatedpower=$radiatedpower" >> config.cfg
echo "Antennaheighttype=$antennaheighttype" >> config.cfg
echo "conductorpower=$conductorpower" >> config.cfg
echo "available_spectrum=$available_spectrum" >> config.cfg

echo "$name" >> config2.cfg

# echo "time=$time" >> config.cfg


# #lat=$(cat config.cfg | grep -o 'Latitude=[^ ,]\+' | cut -d "=" -f2)

 if [ "$isValid" == "True" ]
  then
  echo "$(cat Master_init_resp.html)"


 # #sh ./Avail_Spect_Slave.sh
 elif [ "$isValid" == "False"]
  then
 echo  "$(cat Master_init_resp.html)"
 else
 echo  "$(cat Master_init_resp.html)"
 exit 0
 fi 
