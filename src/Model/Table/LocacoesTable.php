<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Locacoes Model
 *
 * @property \App\Model\Table\BairrosTable&\Cake\ORM\Association\BelongsTo $Bairros
 * @property \App\Model\Table\ArquiteturasTable&\Cake\ORM\Association\BelongsTo $Arquiteturas
 * @property \App\Model\Table\UsuariosTable&\Cake\ORM\Association\BelongsTo $Usuarios
 * @property \App\Model\Table\TiposTable&\Cake\ORM\Association\BelongsToMany $Tipos
 *
 * @method \App\Model\Entity\Locaco newEmptyEntity()
 * @method \App\Model\Entity\Locaco newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Locaco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Locaco get($primaryKey, $options = [])
 * @method \App\Model\Entity\Locaco findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Locaco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Locaco[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Locaco|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Locaco saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Locaco[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Locaco[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Locaco[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Locaco[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LocacoesTable extends Table
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

        $this->setTable('locacoes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Bairros', [
            'foreignKey' => 'bairros_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Arquiteturas', [
            'foreignKey' => 'arquiteturas_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Usuarios', [
            'foreignKey' => 'usuarios_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsToMany('Tipos', [
            'foreignKey' => 'locaco_id',
            'targetForeignKey' => 'tipo_id',
            'joinTable' => 'locacoes_tipos',
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
            ->scalar('nome_locacao')
            ->maxLength('nome_locacao', 255)
            ->requirePresence('nome_locacao', 'create')
            ->notEmptyString('nome_locacao');

        $validator
            ->scalar('endereco')
            ->maxLength('endereco', 255)
            ->requirePresence('endereco', 'create')
            ->notEmptyString('endereco');

        $validator
            ->scalar('cep')
            ->maxLength('cep', 255)
            ->requirePresence('cep', 'create')
            ->notEmptyString('cep');

        $validator
            ->integer('numero')
            ->requirePresence('numero', 'create')
            ->notEmptyString('numero');

        $validator
            ->scalar('complemento')
            ->maxLength('complemento', 255)
            ->allowEmptyString('complemento');

        $validator
            ->scalar('caracteristicas_construcao')
            ->requirePresence('caracteristicas_construcao', 'create')
            ->notEmptyString('caracteristicas_construcao');

        $validator
            ->scalar('detalhes_internos')
            ->requirePresence('detalhes_internos', 'create')
            ->notEmptyString('detalhes_internos');

        $validator
            ->scalar('responsavel')
            ->maxLength('responsavel', 255)
            ->requirePresence('responsavel', 'create')
            ->notEmptyString('responsavel');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

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
            ->scalar('redessociais')
            ->allowEmptyString('redessociais');

        $validator
            ->integer('status')
            ->allowEmptyString('status');

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
        $rules->add($rules->existsIn('bairros_id', 'Bairros'), ['errorField' => 'bairros_id']);
        $rules->add($rules->existsIn('arquiteturas_id', 'Arquiteturas'), ['errorField' => 'arquiteturas_id']);
        $rules->add($rules->existsIn('usuarios_id', 'Usuarios'), ['errorField' => 'usuarios_id']);

        return $rules;
    }
}
