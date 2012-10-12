#!/bin/bash

URPROGRAM=$1

if [ -z "$1" ]; then 
    echo "Must supply an argument. Usage: ./test_all.sh \"command to run your AI\""
    exit
fi

for f in testcases/*.txt
do
    cat "$f" | $URPROGRAM | java -jar arbitrate.jar data/layout.txt dict/OSPDv2.txt "$f"
done
