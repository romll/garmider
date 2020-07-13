<?php

use yii\db\Migration;

/**
 * Handles adding _password_reset_token_and_status to table `user`.
 */
class m181222_162212_add__password_reset_token_and_status_column_to_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user', 'password_reset_token', $this->string()->after('password_hash'));
        $this->addColumn('user', 'status', $this->smallInteger()->notNull()->defaultValue(10)->after('email'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('user', 'password_reset_token');
        $this->dropColumn('user', 'status');
    }
}
