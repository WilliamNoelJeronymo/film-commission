<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Noticias Model
 *
 * @method \App\Model\Entity\Noticia newEmptyEntity()
 * @method \App\Model\Entity\Noticia newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Noticia[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Noticia get($primaryKey, $options = [])
 * @method \App\Model\Entity\Noticia findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Noticia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Noticia[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Noticia|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Noticia saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Noticia[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Noticia[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Noticia[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Noticia[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class NoticiasTable extends Table
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

        $this->setTable('noticias');
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
            ->scalar('titulo')
            ->maxLength('titulo', 255)
            ->requirePresence('titulo', 'create')
            ->notEmptyString('titulo');

        $validator
            ->scalar('sub_titulo')
            ->maxLength('sub_titulo', 255)
            ->requirePresence('sub_titulo', 'create')
            ->notEmptyString('sub_titulo');

        $validator
            ->scalar('materia')
            ->requirePresence('materia', 'create')
            ->notEmptyString('materia');

        $validator
            ->boolean('destaque')
            ->allowEmptyString('destaque');

        return $validator;
    }
}
