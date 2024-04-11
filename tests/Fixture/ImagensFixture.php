<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ImagensFixture
 */
class ImagensFixture extends TestFixture
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
                'profissionais_id' => 1,
                'producoes_id' => 1,
                'noticias_id' => 1,
                'imagem' => 'Lorem ipsum dolor sit amet',
                'locacoes_id' => 1,
            ],
        ];
        parent::init();
    }
}
