<?php
/**
 * Connect plugin for Craft CMS 3.x
 *
 * Allows you to connect to external databases and perform db queries
 *
 * @link      https://nystudio107.com/
 * @copyright Copyright (c) 2018 nystudio107
 */

namespace nystudio107\connect\models;

use craft\base\Model;
use craft\validators\ArrayValidator;

/**
 * @author    nystudio107
 * @package   Connect
 * @since     1.0.0
 */
class Settings extends Model
{
    // Public Properties
    // =========================================================================

    /**
     * @var array the database connections
     */
    public $connections = [];

    // Public Methods
    // =========================================================================

    public function init()
    {
        // Fill in some sane defaults if none are provided
        if (empty($this->connections)) {
            $this->connections = [
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
            ];
        }
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['connections', ArrayValidator::class],
        ];
    }
}
