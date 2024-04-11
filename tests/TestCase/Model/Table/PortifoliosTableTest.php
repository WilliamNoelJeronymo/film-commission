<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PortifoliosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PortifoliosTable Test Case
 */
class PortifoliosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PortifoliosTable
     */
    protected $Portifolios;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Portifolios',
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
        $config = $this->getTableLocator()->exists('Portifolios') ? [] : ['className' => PortifoliosTable::class];
        $this->Portifolios = $this->getTableLocator()->get('Portifolios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Portifolios);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PortifoliosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\PortifoliosTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
