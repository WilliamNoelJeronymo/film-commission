<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LocacoesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LocacoesTable Test Case
 */
class LocacoesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LocacoesTable
     */
    protected $Locacoes;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Locacoes',
        'app.Bairros',
        'app.Arquiteturas',
        'app.Usuarios',
        'app.Tipos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Locacoes') ? [] : ['className' => LocacoesTable::class];
        $this->Locacoes = $this->getTableLocator()->get('Locacoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Locacoes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\LocacoesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\LocacoesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
