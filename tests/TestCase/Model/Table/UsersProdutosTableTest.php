<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsersProdutosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsersProdutosTable Test Case
 */
class UsersProdutosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UsersProdutosTable
     */
    public $UsersProdutos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.users_produtos',
        'app.users',
        'app.produtos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('UsersProdutos') ? [] : ['className' => UsersProdutosTable::class];
        $this->UsersProdutos = TableRegistry::getTableLocator()->get('UsersProdutos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UsersProdutos);

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
