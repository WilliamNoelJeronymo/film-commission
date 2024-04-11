<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Producoes Model
 *
 * @method \App\Model\Entity\Produco newEmptyEntity()
 * @method \App\Model\Entity\Produco newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Produco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Produco get($primaryKey, $options = [])
 * @method \App\Model\Entity\Produco findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Produco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Produco[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Produco|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Produco saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Produco[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Produco[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Produco[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Produco[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProducoesTable extends Table
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

        $this->setTable('producoes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('nome')
            ->maxLength('nome', 255)
            ->requirePresence('nome', 'create')
            ->notEmptyString('nome');

        $validator
            ->integer('dt_producao')
            ->requirePresence('dt_producao', 'create')
            ->notEmptyString('dt_producao');

        $validator
            ->scalar('formato')
            ->maxLength('formato', 255)
            ->allowEmptyString('formato');

        $validator
            ->scalar('distribuido')
            ->maxLength('distribuido', 255)
            ->allowEmptyString('distribuido');

        $validator
            ->scalar('sinopse')
            ->requirePresence('sinopse', 'create')
            ->notEmptyString('sinopse');

        $validator
            ->scalar('genero')
            ->maxLength('genero', 255)
            ->requirePresence('genero', 'create')
            ->notEmptyString('genero');

        $validator
            ->scalar('direcao')
            ->maxLength('direcao', 255)
            ->requirePresence('direcao', 'create')
            ->notEmptyString('direcao');

        $validator
            ->scalar('roteiro')
            ->maxLength('roteiro', 255)
            ->requirePresence('roteiro', 'create')
            ->notEmptyString('roteiro');

        $validator
            ->scalar('produtores')
            ->requirePresence('produtores', 'create')
            ->notEmptyString('produtores');

        $validator
            ->scalar('obs')
            ->allowEmptyString('obs');

        $validator
            ->scalar('elenco')
            ->allowEmptyString('elenco');

        $validator
            ->scalar('locacoes')
            ->allowEmptyString('locacoes');

        return $validator;
    }
}
