<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TimagensTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TimagensTable Test Case
 */
class TimagensTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TimagensTable
     */
    protected $Timagens;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Timagens',
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
        $config = $this->getTableLocator()->exists('Timagens') ? [] : ['className' => TimagensTable::class];
        $this->Timagens = $this->getTableLocator()->get('Timagens', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Timagens);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TimagensTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\TimagensTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
