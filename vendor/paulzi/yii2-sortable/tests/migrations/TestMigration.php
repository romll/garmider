<?php
/**
 * @link https://github.com/paulzi/yii2-sortable
 * @copyright Copyright (c) 2015 PaulZi <pavel.zimakoff@gmail.com>
 * @license MIT (https://github.com/paulzi/yii2-sortable/blob/master/LICENSE)
 */

namespace paulzi\sortable\tests\migrations;

use yii\db\Schema;
use yii\db\Migration;

/**
 * @author PaulZi <pavel.zimakoff@gmail.com>
 */
class TestMigration extends Migration
{
    public function up()
    {
        ob_start();
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        // tree
        if ($this->db->getTableSchema('{{%item}}', true) !== null) {
            $this->dropTable('{{%item}}');
        }
        $this->createTable('{{%item}}', [
            'id'        => Schema::TYPE_PK,
            'parent_id' => Schema::TYPE_INTEGER . ' NULL',
            'sort'      => Schema::TYPE_INTEGER . ' NOT NULL',
            'slug'      => Schema::TYPE_STRING . ' NOT NULL',
        ], $tableOptions);
        $this->createIndex('parent_sort', '{{%item}}', ['parent_id', 'sort']);

        // update cache (sqlite bug)
        $this->db->getSchema()->getTableSchema('{{%item}}', true);
        ob_end_clean();
    }
}
