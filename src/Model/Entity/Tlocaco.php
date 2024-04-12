<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tlocaco Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $imagem
 * @property string $texto
 *
 * @property \App\Model\Entity\Tfilme[] $tfilmes
 */
class Tlocaco extends Entity
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
        'nome' => true,
        'imagem' => true,
        'texto' => true,
        'tfilmes' => true,
    ];
}
