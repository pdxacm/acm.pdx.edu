#!/bin/bash

testEventsSchema()
{
  result=$(kwalify -lf files/events_schema.yaml files/events.yaml|grep INVALID)
  assertNull "The events.yaml failed schema test" "$result"
}

testPyYaml()
{
    python tests/pyyaml_test.py
    assertTrue $?
}

# load shunit2
. shunit2
