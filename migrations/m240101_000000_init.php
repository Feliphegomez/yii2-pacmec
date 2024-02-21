<?php

use yii\db\Migration;

/**
 * Class m240101_000000_init
 */
class m240101_000000_init extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('news', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'content' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240101_000000_init cannot be reverted.\n";
        $this->dropTable('news');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240101_000000_init cannot be reverted.\n";

        return false;
    }
    */
}
