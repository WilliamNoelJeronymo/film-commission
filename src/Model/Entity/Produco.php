<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Produco Entity
 *
 * @property int $id
 * @property string $nome
 * @property int $dt_producao
 * @property string|null $formato
 * @property string|null $distribuido
 * @property string $sinopse
 * @property string $genero
 * @property string $direcao
 * @property string $roteiro
 * @property string $produtores
 * @property string|null $obs
 * @property string|null $elenco
 * @property string|null $locacoes
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Produco extends Entity
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
        'dt_producao' => true,
        'formato' => true,
        'distribuido' => true,
        'sinopse' => true,
        'genero' => true,
        'direcao' => true,
        'roteiro' => true,
        'produtores' => true,
        'obs' => true,
        'elenco' => true,
        'locacoes' => true,
        'created' => true,
        'modified' => true,
    ];
}
