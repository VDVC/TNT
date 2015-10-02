# TNT #

TNT note tagging

## Files ##

* index.php:
	tries to login with data provided in settings.php
* install.php:
	lets you set your SQL servers login data, writes settings.php
* settings.php:
	contains settings, is created by install.php
* install/tables/*:
	(not used yet) layout for SQL tables

## Design Goals ##
### Posible Tag Types ###
* Mentions: @NickName
* Hashtags: #Topic (used e.g. for timeline)
* Rulesets: §Rule (e.g. choose style: Blog/Forum/Wiki)
