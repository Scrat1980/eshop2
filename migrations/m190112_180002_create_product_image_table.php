<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product_image`.
 */
class m190112_180002_create_product_image_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('product_image', [
            'id'         => $this->primaryKey(),
            'path'       => $this->string()->notNull(),
            'id_product' => $this->integer(6)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('product_image');
    }
}
