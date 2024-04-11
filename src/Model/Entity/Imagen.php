<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Imagen Entity
 *
 * @property int $id
 * @property int|null $profissionais_id
 * @property int|null $producoes_id
 * @property int|null $noticias_id
 * @property string $imagem
 * @property int|null $locacoes_id
 *
 * @property \App\Model\Entity\Profissionai $profissionai
 * @property \App\Model\Entity\Produco $produco
 * @property \App\Model\Entity\Noticia $noticia
 * @property \App\Model\Entity\Locaco $locaco
 */
class Imagen extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'profissionais_id' => true,
        'producoes_id' => true,
        'noticias_id' => true,
        'imagem' => true,
        'locacoes_id' => true,
        'profissionai' => true,
        'produco' => true,
        'noticia' => true,
        'locaco' => true,
    ];
}
