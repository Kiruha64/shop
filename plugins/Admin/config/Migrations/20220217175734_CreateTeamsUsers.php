<?php
use Migrations\AbstractMigration;

class CreateTeamsUsers extends AbstractMigration
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
        $table = $this->table('teams_users');
        $table->addColumn('team_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('user_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('verified', 'integer', [
            'default' => '0',
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('role', 'string', [
            'default' => 'user',
            'limit' => 255,
            'null' => false,
        ]);
        $table->create();
    }
}
