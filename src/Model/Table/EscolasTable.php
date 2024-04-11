<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Escolas Model
 *
 * @method \App\Model\Entity\Escola newEmptyEntity()
 * @method \App\Model\Entity\Escola newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Escola[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Escola get($primaryKey, $options = [])
 * @method \App\Model\Entity\Escola findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Escola patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Escola[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Escola|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Escola saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Escola[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Escola[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Escola[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Escola[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EscolasTable extends Table
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

        $this->setTable('escolas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->integer('codigo')
            ->requirePresence('codigo', 'create')
            ->notEmptyString('codigo');

        $validator
            ->scalar('nome')
            ->maxLength('nome', 255)
            ->requirePresence('nome', 'create')
            ->notEmptyString('nome');

        $validator
            ->scalar('abreviacao')
            ->maxLength('abreviacao', 20)
            ->allowEmptyString('abreviacao');

        $validator
            ->scalar('bairro')
            ->maxLength('bairro', 150)
            ->allowEmptyString('bairro');

        $validator
            ->integer('ativo')
            ->notEmptyString('ativo');

        return $validator;
    }
}
