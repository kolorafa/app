#!/bin/bash

npm i --from-lockfile

mkdir -p webroot/assets
cp -R node_modules/* webroot/assets/

mkdir -p webroot/css/fonts
mkdir -p webroot/css/ccss/fonts
mkdir -p webroot/css/webfonts
mkdir -p webroot/css/ccss/webfonts

cp -R node_modules/* webroot/assets/,
cp -R webroot/assets/font-awesome/fonts/* webroot/css/fonts/
cp -R webroot/assets/font-awesome/fonts/* webroot/css/ccss/fonts/
cp -R node_modules/bootstrap-icons webroot/assets/
cp -R node_modules/bootstrap-icons/font/fonts webroot/css/ccss/
