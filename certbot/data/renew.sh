#!/bin/bash

certbot certonly --webroot -w /www --email=master@domain.com --verbose --noninteractive --agree-tos 
-d $1
