<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \Cake\ORM\Association\HasMany $Orders
 * @property \Cake\ORM\Association\HasMany $Profiles
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
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

        $this->table('users');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Orders', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasOne('Profiles', [
            'foreignKey' => 'user_id'
        ]);
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
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('username', 'create')
            ->add('username', 'unique', [
                'rule' => 'validateUnique',
                'provider' => 'table',
                'message' => __('This username is already in use, please insert another.')])
            ->notEmpty('username', __('The <b>username</b> field can not be empty.'));

        $validator
            ->requirePresence('password', 'create')
            ->add('password', 'length', [
                'rule' => [
                    'lengthBetween', 8, 100
                ],
                'message' => __('The password field must be between 8 to 100 characters.')])
            ->notEmpty('password', __('The <b>password</br> field can not be empty.'));

        $validator
            ->requirePresence('repassword', 'create')
            ->add('repassword', 'no-misspelling', [
                'rule' => ['compareWith', 'password'],
                'message' => __('Passwors must be equals, please try again.')
            ]);

        $validator
            ->email('email', 'valid', [
                'rule' => 'email',
                'message' => __('The email field must be a valid email')])
            ->requirePresence('email', 'create')
            ->notEmpty('email', __('The <b>email</b> field can not be empty'));

        $validator
            ->requirePresence('role', 'create')
            ->add('role', 'inList', [
                'rule' => [
                    'inList', [
                        'admin',
                        'client'
                    ]
                ]
            ])
            ->notEmpty('role', __('The <b>role</b> field can not be empty, please contact support.'));

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
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
