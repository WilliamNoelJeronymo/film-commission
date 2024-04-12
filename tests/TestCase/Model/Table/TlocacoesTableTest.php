<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TlocacoesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TlocacoesTable Test Case
 */
class TlocacoesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TlocacoesTable
     */
    protected $Tlocacoes;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Tlocacoes',
        'app.Tfilmes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Tlocacoes') ? [] : ['className' => TlocacoesTable::class];
        $this->Tlocacoes = $this->getTableLocator()->get('Tlocacoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Tlocacoes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TlocacoesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
