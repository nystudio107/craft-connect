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
