<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Locaco Entity
 *
 * @property int $id
 * @property string $nome_locacao
 * @property string $endereco
 * @property string $cep
 * @property int $bairros_id
 * @property int $numero
 * @property string|null $complemento
 * @property string $caracteristicas_construcao
 * @property string $detalhes_internos
 * @property string $responsavel
 * @property string $email
 * @property string $telefone
 * @property string|null $telefone2
 * @property string|null $redessociais
 * @property int $arquiteturas_id
 * @property int|null $status
 * @property int $usuarios_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Bairro $bairro
 * @property \App\Model\Entity\Arquitetura $arquitetura
 * @property \App\Model\Entity\Usuario $usuario
 * @property \App\Model\Entity\Tipo[] $tipos
 */
class Locaco extends Entity
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
        'nome_locacao' => true,
        'endereco' => true,
        'cep' => true,
        'bairros_id' => true,
        'numero' => true,
        'complemento' => true,
        'caracteristicas_construcao' => true,
        'detalhes_internos' => true,
        'responsavel' => true,
        'email' => true,
        'telefone' => true,
        'telefone2' => true,
        'redessociais' => true,
        'arquiteturas_id' => true,
        'status' => true,
        'usuarios_id' => true,
        'created' => true,
        'modified' => true,
        'bairro' => true,
        'arquitetura' => true,
        'usuario' => true,
        'tipos' => true,
    ];
}
