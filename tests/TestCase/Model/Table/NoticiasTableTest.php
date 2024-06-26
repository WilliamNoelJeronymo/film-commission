<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NoticiasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NoticiasTable Test Case
 */
class NoticiasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\NoticiasTable
     */
    protected $Noticias;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Noticias',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Noticias') ? [] : ['className' => NoticiasTable::class];
        $this->Noticias = $this->getTableLocator()->get('Noticias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Noticias);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\NoticiasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
