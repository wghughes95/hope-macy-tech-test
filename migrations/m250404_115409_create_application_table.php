<?php

use yii\db\Migration;

/**
 * Handles the creation of table `application`.
 */
class m250404_115409_create_application_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('application', [
            'id' => $this->primaryKey(),
            'first_name' => $this->string()->notNull(),
            'last_name' => $this->string()->notNull(),
            'date_of_birth' => $this->string()->notNull(),
            'description' => $this->text(),
            'income' => $this->decimal(),
            'number_of_dependents' => $this->integer(),
            'created_at' => $this->timestamp()->defaultExpression('NOW()'),
            'updated_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP')->append('ON UPDATE NOW()'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('application');
    }
}
