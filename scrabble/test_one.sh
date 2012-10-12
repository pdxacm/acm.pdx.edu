#!/bin/bash

URPROGRAM=$1
TESTFILE=$2

if [ -z "$1" -o -z "$2" ]; then 
    echo "Must supply an argument."
    echo "Usage: ./test_all.sh \"command to run your AI\" \"testfile\""
    exit
fi

    cat $TESTFILE | $URPROGRAM | java -jar arbitrate.jar data/layout.txt dict/OSPDv2.txt $TESTFILE
