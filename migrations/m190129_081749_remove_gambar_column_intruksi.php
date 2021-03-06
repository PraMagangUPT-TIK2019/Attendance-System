<?php

use yii\db\Migration;

/**
 * Class m190129_081749_remove_gambar_column_intruksi
 */
class m190129_081749_remove_gambar_column_intruksi extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('intruksi', 'gambar');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addColumn('intruksi', 'gambar', $this->string(100)->notNull());
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190129_081749_remove_gambar_column_intruksi cannot be reverted.\n";

        return false;
    }
    */
}
