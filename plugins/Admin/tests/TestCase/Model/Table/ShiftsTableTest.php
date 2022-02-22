<?php
namespace Admin\Test\TestCase\Model\Table;

use Admin\Model\Table\ShiftsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * Admin\Model\Table\ShiftsTable Test Case
 */
class ShiftsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \Admin\Model\Table\ShiftsTable
     */
    public $Shifts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.Admin.Shifts',
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
        $config = TableRegistry::getTableLocator()->exists('Shifts') ? [] : ['className' => ShiftsTable::class];
        $this->Shifts = TableRegistry::getTableLocator()->get('Shifts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Shifts);

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
