#!/bin/csh
#set ip=`cat PAWS_ip.txt`

curl -X POST  -H "Content-Type: application/json" -d '{
    "deviceDesc": {
        "rulesetIDs": "57c8e0e9-dbf9-314a-b985-ea431ec6b6f6",
        "password": "ef16a9",
        "username" : "514cff"
    },
    "location": {
        "latitude" :"'"$1"'",
         "longitude" :"'"$2"'"
    }
    
}' https://safe-basin-01006.herokuapp.com/api/avail_spectrum > slave_spec_resp.html
resp=`cat slave_spec_resp.html`

status=$(cat slave_spec_resp.html | grep -o "timestamp")



echo $resp 




