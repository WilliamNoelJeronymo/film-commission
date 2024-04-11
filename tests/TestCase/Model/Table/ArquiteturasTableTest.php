<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ArquiteturasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ArquiteturasTable Test Case
 */
class ArquiteturasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ArquiteturasTable
     */
    protected $Arquiteturas;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Arquiteturas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Arquiteturas') ? [] : ['className' => ArquiteturasTable::class];
        $this->Arquiteturas = $this->getTableLocator()->get('Arquiteturas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Arquiteturas);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ArquiteturasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
