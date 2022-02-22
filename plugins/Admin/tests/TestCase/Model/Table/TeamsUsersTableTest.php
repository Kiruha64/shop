<?php
namespace Admin\Test\TestCase\Model\Table;

use Admin\Model\Table\TeamsUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * Admin\Model\Table\TeamsUsersTable Test Case
 */
class TeamsUsersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \Admin\Model\Table\TeamsUsersTable
     */
    public $TeamsUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.Admin.TeamsUsers',
        'plugin.Admin.Teams',
        'plugin.Admin.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TeamsUsers') ? [] : ['className' => TeamsUsersTable::class];
        $this->TeamsUsers = TableRegistry::getTableLocator()->get('TeamsUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TeamsUsers);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
