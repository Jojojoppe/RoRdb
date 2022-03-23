# RoRdb
RoRdb needs a Google service account to work. Create a cloud app on console.cloud.google.com and create a service account in it. Create a key for that service account and download it as JSON file and upload it to the dedicated box below. On one service account multiple instances of RoRdb can be ran. Each instance MUST have another UID since a folder is created in the root of the drive of the service account. This UID keeps the folders speratated. You must provide an administrator email which is used to share the created folder with in case you need access to the database directly. Note: Not specifying any email will cause the folder to be visible for anyone with the link (currently a bug which is worked upon). There are several actions you can do from this settings page, namely 'Load database', '(Re)create database' and 'Delete database'. The first one will search in the service account drive for a valid installation of RoRdb with the set UID. If it is found, the RoRdb wordpress plugin will automatically load all the settings. The second one will create a new installation of RoRdb (and deletes the previous one if it exists). The last will delete the installation of RoRdb.

This plugin is built with composer and uses [php-scoper](https://github.com/humbug/php-scoper) to manage namespace conflicts with other plugins by packaging all dependencies in the `build` directory with an extra namespace appended. The `vendor` directory created by composer is not included in the repository but can be recreated by running `composer install`. After changing things the repackaging can be done as follow:

```bash
vendor/bin/php-scoper add-prefix
composer dump-autoload --working-dir build --classmap-authoritative
```
Note: php and composer must be installed on the system

<!---
~Current Version:0.1.1~
--->