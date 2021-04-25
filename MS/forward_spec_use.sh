#!/bin/sh


now=$(date +"%Y-%m-%d %T")
curl --header "Content-Type: application/json" --request POST --data '{
    "timestamp": "'"$1 $2"'",
    "deviceDesc": {
        "rulesetIDs": "'"$3"'",
       "username" : "514cff"
   
    },
      "spectra":[
          {"ID":"'"$5"'" }
      ]
            
 
    }'  https://safe-basin-01006.herokuapp.com/api/spectrum_use >slave_spec_use_resp.html


resp=`cat slave_spec_use_resp.html`
echo   $resp