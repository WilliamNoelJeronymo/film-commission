<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ServicosPrestadosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ServicosPrestadosTable Test Case
 */
class ServicosPrestadosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ServicosPrestadosTable
     */
    protected $ServicosPrestados;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ServicosPrestados',
        'app.Profissionais',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ServicosPrestados') ? [] : ['className' => ServicosPrestadosTable::class];
        $this->ServicosPrestados = $this->getTableLocator()->get('ServicosPrestados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ServicosPrestados);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ServicosPrestadosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
