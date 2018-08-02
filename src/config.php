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
        'remote' => [
            'driver' => getenv('REMOTE_DB_DRIVER'),
            'server' => getenv('REMOTE_DB_SERVER'),
            'user' => getenv('REMOTE_DB_USER'),
            'password' => getenv('REMOTE_DB_PASSWORD'),
            'database' => getenv('REMOTE_DB_DATABASE'),
            'schema' => getenv('REMOTE_DB_SCHEMA'),
            'tablePrefix' => getenv('REMOTE_DB_TABLE_PREFIX'),
            'port' => getenv('REMOTE_DB_PORT')
        ],
    ],
];
