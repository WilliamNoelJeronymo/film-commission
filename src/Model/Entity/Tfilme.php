<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tfilme Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $texto
 * @property string $ficha_tecnica
 * @property int $ano
 *
 * @property \App\Model\Entity\Tlocaco[] $tlocacoes
 */
class Tfilme extends Entity
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
        'texto' => true,
        'ficha_tecnica' => true,
        'ano' => true,
        'tlocacoes' => true,
    ];
}
