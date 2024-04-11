<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TfilmesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TfilmesTable Test Case
 */
class TfilmesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TfilmesTable
     */
    protected $Tfilmes;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Tfilmes',
        'app.Tlocacoes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Tfilmes') ? [] : ['className' => TfilmesTable::class];
        $this->Tfilmes = $this->getTableLocator()->get('Tfilmes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Tfilmes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TfilmesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
