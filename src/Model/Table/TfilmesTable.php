<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tfilmes Model
 *
 * @property \App\Model\Table\TlocacoesTable&\Cake\ORM\Association\BelongsToMany $Tlocacoes
 *
 * @method \App\Model\Entity\Tfilme newEmptyEntity()
 * @method \App\Model\Entity\Tfilme newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Tfilme[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tfilme get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tfilme findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Tfilme patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tfilme[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tfilme|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tfilme saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tfilme[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tfilme[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tfilme[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tfilme[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class TfilmesTable extends Table
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

        $this->setTable('tfilmes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsToMany('Tlocacoes', [
            'foreignKey' => 'tfilme_id',
            'targetForeignKey' => 'tlocaco_id',
            'joinTable' => 'tlocacoes_tfilmes',
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

        $validator
            ->scalar('texto')
            ->requirePresence('texto', 'create')
            ->notEmptyString('texto');

        $validator
            ->scalar('ficha_tecnica')
            ->requirePresence('ficha_tecnica', 'create')
            ->notEmptyString('ficha_tecnica');

        $validator
            ->integer('ano')
            ->requirePresence('ano', 'create')
            ->notEmptyString('ano');

        return $validator;
    }
}
