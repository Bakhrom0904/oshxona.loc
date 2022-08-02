<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%ishchi}}`.
 */
class m220727_170330_create_ishchi_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%ishchi}}', [
            'id' => $this->primaryKey(),
            'ismi' => $this->string(),
            'yoshi' => $this->integer(),
            'jinsi' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%ishchi}}');
    }
}
