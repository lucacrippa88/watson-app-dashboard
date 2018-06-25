# Simple dashboard for Watson web applications

This repository contains all code needed to easily create a dashboard for web applications that use Watson Services.

## Introduction

Each web application needs a simple and intuitive graphic user interface. This solution allows you to use a mixed framework to create a simple and fresh UI for your web apps, and it's based on:

1. Carbon Design System: http://www.carbondesignsystem.com/
2. Material Design Lite: https://getmdl.io/
3. Materialize: https://materializecss.com/

All css/js for graphic purpose is hosted within the web application.

## Prerequisites

The only prerequisite is to have a working PHP application.

## Installation

Copy the contents and start creating your dashboard using examples you find in it.
You will need to edit:
1. admincfg/CheckLogin.php: set username and password to log in to the web application
2. api/ChatBot.php: set workspace id, username and password of Watson Assistant service

## Features

This dashboard features a responsive layout with lateral menu, dropdown menu, mobile drawer and a fixed footer. The dashboard is enabled to integrate a Virtual Assistant powered by Watson Assistant. Please see related tutorials for more info. This dashboard integrates also sweetalert2 (https://sweetalert2.github.io/).

### Screenshots

To be updated.

## Related tutorials

Please refer to the following repos to gain knowledge on how Watson Assistant is integrated within this dashboard:

1. https://github.com/lucacrippa88/watson-assistant-php
2. https://github.com/lucacrippa88/watson-assistant-training

## Disclaimer

This is not an official asset. It has been created by me and it's not intended for professional use. For Watson Assistant feature, it follows all guidelines you can find in https://console.bluemix.net/docs/services/conversation/ and in https://www.ibm.com/watson/developercloud/assistant/api/v1/. For Watson Services SLAs, please have a look here: https://www-03.ibm.com/software/sla/sladb.nsf/sla/bm-0038-09.

## License

This project uses the Apache License Version 2.0 software license. https://github.com/lucacrippa88/watson-app-php-dashboard/blob/master/LICENSE
