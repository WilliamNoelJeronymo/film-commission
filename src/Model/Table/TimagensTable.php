<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Timagens Model
 *
 * @property \App\Model\Table\TfilmesTable&\Cake\ORM\Association\BelongsTo $Tfilmes
 *
 * @method \App\Model\Entity\Timagen newEmptyEntity()
 * @method \App\Model\Entity\Timagen newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Timagen[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Timagen get($primaryKey, $options = [])
 * @method \App\Model\Entity\Timagen findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Timagen patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Timagen[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Timagen|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Timagen saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Timagen[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Timagen[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Timagen[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Timagen[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class TimagensTable extends Table
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

        $this->setTable('timagens');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Tfilmes', [
            'foreignKey' => 'tfilmes_id',
            'joinType' => 'INNER',
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
            ->scalar('nome')
            ->maxLength('nome', 255)
            ->requirePresence('nome', 'create')
            ->notEmptyString('nome');

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
        $rules->add($rules->existsIn('tfilmes_id', 'Tfilmes'), ['errorField' => 'tfilmes_id']);

        return $rules;
    }
}
