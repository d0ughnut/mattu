#!/usr/bin/env python2.7

import sys, json, config
from requests_oauthlib import OAuth1Session

CK = config.CONSUMER_KEY
CS = config.CONSUMER_SECRET
AT = config.ACCESS_TOKEN
ATS = config.ACCESS_TOKEN_SECRET
twitter = OAuth1Session(CK, CS, AT, ATS)

params = {
    'id' : 1118370,
}

url = "https://api.twitter.com/1.1/trends/place.json"

req = twitter.get('https://api.twitter.com/1.1/trends/place.json', params=params)

if req.status_code == 200:
    for trend in req.json()[0]['trends']:
        print(trend['name'].encode('utf-8'))
else:
    print("ERROR : %d"% req.status_code)
