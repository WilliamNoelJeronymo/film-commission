<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProfissionaisTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProfissionaisTable Test Case
 */
class ProfissionaisTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProfissionaisTable
     */
    protected $Profissionais;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Profissionais',
        'app.Usuarios',
        'app.ServicosPrestados',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Profissionais') ? [] : ['className' => ProfissionaisTable::class];
        $this->Profissionais = $this->getTableLocator()->get('Profissionais', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Profissionais);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProfissionaisTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ProfissionaisTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
