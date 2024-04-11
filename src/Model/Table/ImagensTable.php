<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Imagens Model
 *
 * @property \App\Model\Table\ProfissionaisTable&\Cake\ORM\Association\BelongsTo $Profissionais
 * @property \App\Model\Table\ProducoesTable&\Cake\ORM\Association\BelongsTo $Producoes
 * @property \App\Model\Table\NoticiasTable&\Cake\ORM\Association\BelongsTo $Noticias
 * @property \App\Model\Table\LocacoesTable&\Cake\ORM\Association\BelongsTo $Locacoes
 *
 * @method \App\Model\Entity\Imagen newEmptyEntity()
 * @method \App\Model\Entity\Imagen newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Imagen[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Imagen get($primaryKey, $options = [])
 * @method \App\Model\Entity\Imagen findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Imagen patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Imagen[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Imagen|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Imagen saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Imagen[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Imagen[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Imagen[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Imagen[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ImagensTable extends Table
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

        $this->setTable('imagens');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Profissionais', [
            'foreignKey' => 'profissionais_id',
        ]);
        $this->belongsTo('Producoes', [
            'foreignKey' => 'producoes_id',
        ]);
        $this->belongsTo('Noticias', [
            'foreignKey' => 'noticias_id',
        ]);
        $this->belongsTo('Locacoes', [
            'foreignKey' => 'locacoes_id',
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
            ->scalar('imagem')
            ->maxLength('imagem', 255)
            ->requirePresence('imagem', 'create')
            ->notEmptyFile('imagem');

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
        $rules->add($rules->existsIn('profissionais_id', 'Profissionais'), ['errorField' => 'profissionais_id']);
        $rules->add($rules->existsIn('producoes_id', 'Producoes'), ['errorField' => 'producoes_id']);
        $rules->add($rules->existsIn('noticias_id', 'Noticias'), ['errorField' => 'noticias_id']);
        $rules->add($rules->existsIn('locacoes_id', 'Locacoes'), ['errorField' => 'locacoes_id']);

        return $rules;
    }
}
