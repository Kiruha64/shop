<?php
namespace Admin\Test\TestCase\Model\Table;

use Admin\Model\Table\TypecategoriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * Admin\Model\Table\TypecategoriesTable Test Case
 */
class TypecategoriesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \Admin\Model\Table\TypecategoriesTable
     */
    public $Typecategories;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.Admin.Typecategories',
        'plugin.Admin.Categories',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Typecategories') ? [] : ['className' => TypecategoriesTable::class];
        $this->Typecategories = TableRegistry::getTableLocator()->get('Typecategories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Typecategories);

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
