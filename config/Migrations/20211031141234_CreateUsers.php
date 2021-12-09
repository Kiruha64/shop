<?php
use Migrations\AbstractMigration;

class CreateUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('users');

        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('role', 'text', [
            'default' => null,
            'null' => false,
        ]);

        $table->addColumn('email', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('password', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('img_name', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('img_path', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('verified', 'integer', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('token', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);


        $table->create();
    }
}

