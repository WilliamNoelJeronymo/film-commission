<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProducoesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProducoesTable Test Case
 */
class ProducoesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProducoesTable
     */
    protected $Producoes;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Producoes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Producoes') ? [] : ['className' => ProducoesTable::class];
        $this->Producoes = $this->getTableLocator()->get('Producoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Producoes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProducoesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
