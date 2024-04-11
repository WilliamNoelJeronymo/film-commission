<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Profissionais Model
 *
 * @property \App\Model\Table\UsuariosTable&\Cake\ORM\Association\BelongsTo $Usuarios
 * @property \App\Model\Table\ServicosPrestadosTable&\Cake\ORM\Association\BelongsToMany $ServicosPrestados
 *
 * @method \App\Model\Entity\Profissionai newEmptyEntity()
 * @method \App\Model\Entity\Profissionai newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Profissionai[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Profissionai get($primaryKey, $options = [])
 * @method \App\Model\Entity\Profissionai findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Profissionai patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Profissionai[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Profissionai|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Profissionai saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Profissionai[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Profissionai[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Profissionai[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Profissionai[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProfissionaisTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('profissionais');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Usuarios', [
            'foreignKey' => 'usuarios_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsToMany('ServicosPrestados', [
            'foreignKey' => 'profissionai_id',
            'targetForeignKey' => 'servicos_prestado_id',
            'joinTable' => 'profissionais_servicos_prestados',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('nome_fantasia')
            ->maxLength('nome_fantasia', 255)
            ->requirePresence('nome_fantasia', 'create')
            ->notEmptyString('nome_fantasia');

        $validator
            ->scalar('razao_social')
            ->maxLength('razao_social', 255)
            ->requirePresence('razao_social', 'create')
            ->notEmptyString('razao_social');

        $validator
            ->scalar('cnpj_ou_cpf')
            ->maxLength('cnpj_ou_cpf', 20)
            ->requirePresence('cnpj_ou_cpf', 'create')
            ->notEmptyString('cnpj_ou_cpf');

        $validator
            ->scalar('endereco')
            ->requirePresence('endereco', 'create')
            ->notEmptyString('endereco');

        $validator
            ->scalar('telefone')
            ->maxLength('telefone', 20)
            ->requirePresence('telefone', 'create')
            ->notEmptyString('telefone');

        $validator
            ->scalar('telefone2')
            ->maxLength('telefone2', 20)
            ->allowEmptyString('telefone2');

        $validator
            ->scalar('whatsapp')
            ->maxLength('whatsapp', 20)
            ->requirePresence('whatsapp', 'create')
            ->notEmptyString('whatsapp');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('sobre_empresa')
            ->requirePresence('sobre_empresa', 'create')
            ->notEmptyString('sobre_empresa');

        $validator
            ->scalar('perfil')
            ->maxLength('perfil', 255)
            ->requirePresence('perfil', 'create')
            ->notEmptyString('perfil');

        $validator
            ->scalar('facebook')
            ->allowEmptyString('facebook');

        $validator
            ->scalar('instagram')
            ->allowEmptyString('instagram');

        $validator
            ->scalar('twitter')
            ->allowEmptyString('twitter');

        $validator
            ->scalar('linkedin')
            ->allowEmptyString('linkedin');

        $validator
            ->integer('status')
            ->notEmptyString('status');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('usuarios_id', 'Usuarios'), ['errorField' => 'usuarios_id']);

        return $rules;
    }
}
