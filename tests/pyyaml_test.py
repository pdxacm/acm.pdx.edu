import yaml
import sys
f = open('files/events.yaml')
try:
    y = yaml.load(f)
except Exception:
    sys.exit(1)
else:
    sys.exit()
