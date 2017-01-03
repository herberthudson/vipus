<?php
use Migrations\AbstractMigration;

class AddStateToAddresses extends AbstractMigration
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
        $table->addColumn('state', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => false,
            'after' => 'city'
        ]);
        $table->update();
    }
}
