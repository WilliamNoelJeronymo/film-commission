<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Escola Entity
 *
 * @property int $id
 * @property int $codigo
 * @property string $nome
 * @property string|null $abreviacao
 * @property string|null $bairro
 * @property int $ativo
 */
class Escola extends Entity
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
        'codigo' => true,
        'nome' => true,
        'abreviacao' => true,
        'bairro' => true,
        'ativo' => true,
    ];
}
