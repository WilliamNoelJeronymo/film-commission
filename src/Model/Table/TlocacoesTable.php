<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tlocacoes Model
 *
 * @property \App\Model\Table\TfilmesTable&\Cake\ORM\Association\BelongsToMany $Tfilmes
 *
 * @method \App\Model\Entity\Tlocaco newEmptyEntity()
 * @method \App\Model\Entity\Tlocaco newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Tlocaco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tlocaco get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tlocaco findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Tlocaco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tlocaco[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tlocaco|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tlocaco saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tlocaco[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tlocaco[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tlocaco[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tlocaco[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class TlocacoesTable extends Table
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

        $this->setTable('tlocacoes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsToMany('Tfilmes', [
            'foreignKey' => 'tlocaco_id',
            'targetForeignKey' => 'tfilme_id',
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
            ->scalar('imagem')
            ->maxLength('imagem', 255)
            ->requirePresence('imagem', 'create')
            ->notEmptyFile('imagem');

        $validator
            ->scalar('texto')
            ->requirePresence('texto', 'create')
            ->notEmptyString('texto');

        return $validator;
    }
}
