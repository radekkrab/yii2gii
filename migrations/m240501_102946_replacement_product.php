<?php

use yii\db\Migration;

/**
 * Class m240501_102946_replacement_product
 */
class m240501_102946_replacement_product extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('replacement_product', [
            'id' => $this->primaryKey(),
            'deleted_id' => $this->integer(),
            'replaced_id' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('replacement_product');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240501_102946_replacement_product cannot be reverted.\n";

        return false;
    }
    */
}
