#!/bin/bash

testEventsSchema()
{
  result=$(kwalify -lf files/events_schema.yaml files/events.yaml|grep INVALID)
  assertNull "The events.yaml failed schema test" "$result"
}

testPyYaml()
{
    python tests/pyyaml_test.py
    assertTrue "The events.yaml contains syntax errors (PyYaml)" $?
}

# load shunit2
. shunit2
