#!/bin/bash
./killfoundry.sh & process_id=$!
wait $process_id
node /home/dungeonmaster/foundry/foundryvtt/resources/app/main.js --world=$1 --dataPath=/home/dungeonmaster/foundry/foundrydata


