<?php
/**
 * Connect plugin for Craft CMS 3.x
 *
 * Allows you to connect to external databases and perform db queries
 *
 * @link      https://nystudio107.com/
 * @copyright Copyright (c) 2018 nystudio107
 */

namespace nystudio107\connect\db;

use yii\db\Connection;

/**
 * @author    nystudio107
 * @package   Connect
 * @since     1.0.0
 */
class Query extends \yii\db\Query
{
    // Public Properties
    // =========================================================================

    /**
     * @var ?Connection the database connections
     */
    public ?Connection $db = null;

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function createCommand($db = null)
    {
        return parent::createCommand($db ?? $this->db);
    }

    /**
     * @inheritdoc
     */
    public function batch($batchSize = 100, $db = null)
    {
        return parent::batch($batchSize, $db ?? $this->db);
    }

    /**
     * @inheritdoc
     */
    public function each($batchSize = 100, $db = null)
    {
        return parent::each($batchSize, $db ?? $this->db);
    }

    /**
     * @inheritdoc
     */
    public function all($db = null)
    {
        return parent::all($db ?? $this->db);
    }

    /**
     * @inheritdoc
     */
    public function one($db = null)
    {
        return parent::one($db ?? $this->db);
    }

    /**
     * @inheritdoc
     */
    public function scalar($db = null)
    {
        return parent::scalar($db ?? $this->db);
    }

    /**
     * @inheritdoc
     */
    public function column($db = null)
    {
        return parent::column($db ?? $this->db);
    }

    /**
     * @inheritdoc
     */
    public function count($q = '*', $db = null)
    {
        return parent::count($q, $db ?? $this->db);
    }

    /**
     * @inheritdoc
     */
    public function sum($q, $db = null)
    {
        return parent::sum($q, $db ?? $this->db);
    }

    /**
     * @inheritdoc
     */
    public function average($q, $db = null)
    {
        return parent::average($q, $db ?? $this->db);
    }

    /**
     * @inheritdoc
     */
    public function min($q, $db = null)
    {
        return parent::min($q, $db ?? $this->db);
    }

    /**
     * @inheritdoc
     */
    public function max($q, $db = null)
    {
        return parent::max($q, $db ?? $this->db);
    }

    /**
     * @inheritdoc
     */
    public function exists($db = null)
    {
        return parent::exists($db ?? $this->db);
    }
}
