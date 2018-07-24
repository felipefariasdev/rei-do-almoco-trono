<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VotosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VotosTable Test Case
 */
class VotosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VotosTable
     */
    public $Votos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.votos',
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
        $config = TableRegistry::getTableLocator()->exists('Votos') ? [] : ['className' => VotosTable::class];
        $this->Votos = TableRegistry::getTableLocator()->get('Votos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Votos);

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
