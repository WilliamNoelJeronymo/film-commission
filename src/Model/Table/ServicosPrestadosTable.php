<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ServicosPrestados Model
 *
 * @property \App\Model\Table\ProfissionaisTable&\Cake\ORM\Association\BelongsToMany $Profissionais
 *
 * @method \App\Model\Entity\ServicosPrestado newEmptyEntity()
 * @method \App\Model\Entity\ServicosPrestado newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ServicosPrestado[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ServicosPrestado get($primaryKey, $options = [])
 * @method \App\Model\Entity\ServicosPrestado findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ServicosPrestado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ServicosPrestado[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ServicosPrestado|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ServicosPrestado saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ServicosPrestado[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ServicosPrestado[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ServicosPrestado[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ServicosPrestado[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ServicosPrestadosTable extends Table
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

        $this->setTable('servicos_prestados');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Profissionais', [
            'foreignKey' => 'servicos_prestado_id',
            'targetForeignKey' => 'profissionai_id',
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
            ->scalar('nome')
            ->maxLength('nome', 255)
            ->requirePresence('nome', 'create')
            ->notEmptyString('nome');

        $validator
            ->scalar('descricao')
            ->requirePresence('descricao', 'create')
            ->notEmptyString('descricao');

        $validator
            ->integer('aop')
            ->requirePresence('aop', 'create')
            ->notEmptyString('aop');

        return $validator;
    }
}
