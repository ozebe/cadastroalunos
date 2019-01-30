<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Student Model
 *
 * @method \App\Model\Entity\Student get($primaryKey, $options = [])
 * @method \App\Model\Entity\Student newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Student[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Student|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Student|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Student patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Student[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Student findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class StudentTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('student');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', 'create');

        //$validator
        //    ->integer('user_id')
        //    ->allowEmptyString('user_id', 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 200)
            ->requirePresence('name', 'create')
            ->allowEmptyString('name', false);

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->allowEmptyString('email', false);

        //$validator
        //    ->scalar('photo')
        //    ->maxLength('photo', 100)
        //    ->requirePresence('photo', 'create')
        //    ->allowEmptyString('photo', false);

        //$validator
        //    ->scalar('telephone')
        //    ->maxLength('telephone', 30)
        //    ->requirePresence('telephone', 'create')
        //    ->allowEmptyString('telephone', false);

        $validator
            ->scalar('cpf')
            ->maxLength('cpf', 11)
            ->requirePresence('cpf', 'create')
            ->allowEmptyString('cpf', false);

        //$validator
        //    ->integer('sex')
        //    ->requirePresence('sex', 'create')
        //    ->allowEmptyString('sex', false);

        //$validator
        //    ->date('birthdate')
        //    ->requirePresence('birthdate', 'create')
        //    ->allowEmptyDate('birthdate', false);

        //$validator
        //    ->scalar('address')
        //    ->maxLength('address', 200)
        //    ->requirePresence('address', 'create')
        //    ->allowEmptyString('address', false);

        //$validator
        //    ->scalar('uf')
        //    ->maxLength('uf', 2)
        //    ->requirePresence('uf', 'create')
        //    ->allowEmptyString('uf', false);

        //$validator
        //    ->scalar('city')
        //    ->maxLength('city', 100)
        //    ->requirePresence('city', 'create')
        //    ->allowEmptyString('city', false);

        //$validator
        //    ->scalar('neighborhood')
        //    ->maxLength('neighborhood', 200)
        //    ->requirePresence('neighborhood', 'create')
        //    ->allowEmptyString('neighborhood', false);

        //$validator
        //    ->scalar('cep')
        //    ->maxLength('cep', 10)
        //    ->requirePresence('cep', 'create')
        //    ->allowEmptyString('cep', false);

        //$validator
        //    ->scalar('publicplace')
        //    ->maxLength('publicplace', 200)
        //    ->requirePresence('publicplace', 'create')
        //    ->allowEmptyString('publicplace', false);

        //$validator
        //    ->scalar('number')
        //    ->maxLength('number', 100)
        //    ->requirePresence('number', 'create')
        //    ->allowEmptyString('number', false);

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email'], 'Este email já existe.'));
        $rules->add($rules->isUnique(['cpf'], 'Este CPF já existe.'));


        return $rules;
    }
}
