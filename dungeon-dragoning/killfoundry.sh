#!/bin/bash

CHESTIE=`ps -ef | grep foundry | sed -n 1p | awk '{print $2}'`
echo $CHESTIE AAAAAAA
kill -9 $CHESTIE
