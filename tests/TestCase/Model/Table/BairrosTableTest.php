<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BairrosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BairrosTable Test Case
 */
class BairrosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BairrosTable
     */
    protected $Bairros;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Bairros',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Bairros') ? [] : ['className' => BairrosTable::class];
        $this->Bairros = $this->getTableLocator()->get('Bairros', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Bairros);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\BairrosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
