<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m210115_164811_kayit
 */
class m210115_164811_kayit extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        return $this->createTable('kayit', [
            'id' => Schema::TYPE_PK,
            // $this->primaryKey()
            'name' => Schema::TYPE_STRING,
            // $this->string(255) // String with 255 characters
            'surname' => Schema::TYPE_STRING,
            'okulnumber' => Schema::TYPE_INTEGER,
            'fakulte' => Schema::TYPE_STRING,
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
        return $this->dropTable('kayit');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210115_164811_kayit cannot be reverted.\n";

        return false;
    }
    */
}
