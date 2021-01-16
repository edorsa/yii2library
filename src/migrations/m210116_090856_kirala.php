<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m210116_090856_kirala
 */
class m210116_090856_kirala extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        return $this->createTable('kirala', [
            'kiraid' => Schema::TYPE_PK,
            // $this->primaryKey()
            'name' => Schema::TYPE_STRING,
            // $this->string(255) // String with 255 characters
            'surname' => Schema::TYPE_STRING,
            'okulnumber' => Schema::TYPE_INTEGER,
            'kitapadi' => Schema::TYPE_STRING,
            'kitapyazari' => Schema::TYPE_STRING,
            'created_at' => Schema::TYPE_DATETIME,
            // $this->integer()
            'updated_at' => Schema::TYPE_DATETIME
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return $this->dropTable('kirala');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210116_090856_kirala cannot be reverted.\n";

        return false;
    }
    */
}
