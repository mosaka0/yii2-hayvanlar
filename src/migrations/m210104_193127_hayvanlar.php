<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m210104_193127_hayvanlar
 */
class m210104_193127_hayvanlar extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        return $this->createTable('hayvanlar', [
            'id' => Schema::TYPE_PK,
            // $this->primaryKey()
            'isim' => Schema::TYPE_STRING,
            // $this->string(255) // String with 255 characters
            'kilo' => Schema::TYPE_STRING,
            'boy' => Schema::TYPE_STRING,
            // $this->integer()
            'tür' => Schema::TYPE_STRING
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return $this->dropTable('hayvanlar');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210104_193127_hayvanlar cannot be reverted.\n";

        return false;
    }
    */
}
