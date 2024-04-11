<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Profissionai Entity
 *
 * @property int $id
 * @property string $nome_fantasia
 * @property string $razao_social
 * @property string $cnpj_ou_cpf
 * @property string $endereco
 * @property string $telefone
 * @property string|null $telefone2
 * @property string $whatsapp
 * @property string $email
 * @property string $sobre_empresa
 * @property int $usuarios_id
 * @property string $perfil
 * @property string|null $facebook
 * @property string|null $instagram
 * @property string|null $twitter
 * @property string|null $linkedin
 * @property int $status
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Usuario $usuario
 * @property \App\Model\Entity\ServicosPrestado[] $servicos_prestados
 */
class Profissionai extends Entity
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
        'nome_fantasia' => true,
        'razao_social' => true,
        'cnpj_ou_cpf' => true,
        'endereco' => true,
        'telefone' => true,
        'telefone2' => true,
        'whatsapp' => true,
        'email' => true,
        'sobre_empresa' => true,
        'usuarios_id' => true,
        'perfil' => true,
        'facebook' => true,
        'instagram' => true,
        'twitter' => true,
        'linkedin' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'usuario' => true,
        'servicos_prestados' => true,
    ];
}
