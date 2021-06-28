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
class Schema extends \yii\db\Schema
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function getTableNames($schema = '', $refresh = false)
    {
      return parent::getTableNames($schema, $refresh);
    }

    /**
     * @inheritdoc
     */
    public function quoteSimpleTableName($name = '')
    {
      return parent::quoteSimpleTableName($name);
    }

    /**
     * @inheritdoc
     */
    public function loadTableSchema($name = '')
    {
        return parent::loadTableSchema($name);
    }

    /**
     * @inheritdoc
     */
    public function findTableNames($schema = '') {
      $sql = 'SHOW TABLES';
      if ($schema !== '') {
          $sql .= ' FROM ' . $this->quoteSimpleTableName($schema);
      }

      return $this->db->createCommand($sql)->queryColumn();
    }
}
