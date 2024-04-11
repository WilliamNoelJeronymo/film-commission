<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EscolasFixture
 */
class EscolasFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'codigo' => 1,
                'nome' => 'Lorem ipsum dolor sit amet',
                'abreviacao' => 'Lorem ipsum dolor ',
                'bairro' => 'Lorem ipsum dolor sit amet',
                'ativo' => 1,
            ],
        ];
        parent::init();
    }
}
