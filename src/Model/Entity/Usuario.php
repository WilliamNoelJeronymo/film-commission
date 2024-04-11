<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Usuario Entity
 *
 * @property int $id
 * @property int $grupos_id
 * @property int $ativo
 * @property string $nome
 * @property string $email
 * @property string|null $telefone
 * @property string|null $senha
 * @property string|null $token
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Grupo $grupo
 */
class Usuario extends Entity
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
        'grupos_id' => true,
        'ativo' => true,
        'nome' => true,
        'email' => true,
        'telefone' => true,
        'senha' => true,
        'token' => true,
        'created' => true,
        'modified' => true,
        'grupo' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'token',
    ];
}
