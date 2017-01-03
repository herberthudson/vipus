<?php
use Migrations\AbstractMigration;

class AddNameToAddresses extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('addresses');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => false,
            'after' => 'id'
        ]);
        $table->update();
    }
}
