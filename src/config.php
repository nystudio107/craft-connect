<?php
/**
 * Connect plugin for Craft CMS 3.x
 *
 * Allows you to connect to external databases and perform db queries
 *
 * @link      https://nystudio107.com/
 * @copyright Copyright (c) 2018 nystudio107
 */

/**
 * Connect config.php
 *
 * This file exists only as a template for the Connect settings.
 * It does nothing on its own.
 *
 * Don't edit this file, instead copy it to 'craft/config' as 'connect.php'
 * and make your changes there to override default settings.
 *
 * Once copied to 'craft/config', this file will be multi-environment aware as
 * well, so you can have different settings groups for each environment, just as
 * you do for 'general.php'
 */

return [
    'connections' => [
        'example' => [
            // The database driver that will used ('mysql' or 'pgsql')
            'driver' => 'mysql',
            // The database server name or IP address (usually this is 'localhost' or '127.0.0.1')
            'server' => 'localhost',
            // The database username to connect with
            'user' => '',
            // The database password to connect with
            'password' => '',
            // The name of the database to select
            'database' => '',
            // The prefix that should be added to generated table names
            'tablePrefix' => '',
            // The port to connect to the database with. Will default to 5432 for PostgreSQL and 3306 for MySQL.
            'port' => '3306',
        ],
    ],
];
