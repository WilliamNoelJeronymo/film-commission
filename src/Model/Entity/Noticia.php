<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Noticia Entity
 *
 * @property int $id
 * @property string $titulo
 * @property string $sub_titulo
 * @property string $materia
 * @property bool|null $destaque
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class Noticia extends Entity
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
        'titulo' => true,
        'sub_titulo' => true,
        'materia' => true,
        'destaque' => true,
        'created' => true,
        'modified' => true,
    ];
}
