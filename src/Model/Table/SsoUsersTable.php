<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class SsoUsersTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Departments', [
            'foreignKey' => 'department_id',
        ]);
        $this->belongsTo('Roles', [
            'foreignKey' => 'role_id',
        ]);
        $this->belongsTo('Statuses', [
            'foreignKey' => 'status_id',
        ]);
        $this->hasMany('AccessRoleIjnCrrc', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('UserManagers', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('UserTokens', [
            'foreignKey' => 'user_id',
        ]);
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('msgraph_id')
            ->maxLength('msgraph_id', 255)
            ->allowEmptyString('msgraph_id');

        $validator
            ->scalar('staffno')
            ->maxLength('staffno', 255)
            ->allowEmptyString('staffno');

        $validator
            ->scalar('salutation')
            ->maxLength('salutation', 255)
            ->allowEmptyString('salutation');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email')
            ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('icno')
            ->maxLength('icno', 255)
            ->allowEmptyString('icno');

        $validator
            ->scalar('mail')
            ->maxLength('mail', 255)
            ->allowEmptyString('mail');

        $validator
            ->scalar('position')
            ->maxLength('position', 255)
            ->allowEmptyString('position');

        $validator
            ->integer('department_id')
            ->allowEmptyString('department_id');

        $validator
            ->scalar('department')
            ->maxLength('department', 255)
            ->allowEmptyString('department');

        $validator
            ->scalar('officenum')
            ->maxLength('officenum', 255)
            ->allowEmptyString('officenum');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 255)
            ->allowEmptyString('phone');

        $validator
            ->integer('role_id')
            ->allowEmptyString('role_id');

        $validator
            ->scalar('photo')
            ->maxLength('photo', 4294967295)
            ->allowEmptyString('photo');

        $validator
            ->allowEmptyString('new_photo');

        $validator
            ->scalar('add1')
            ->allowEmptyString('add1');

        $validator
            ->scalar('add2')
            ->allowEmptyString('add2');

        $validator
            ->scalar('add3')
            ->maxLength('add3', 255)
            ->allowEmptyString('add3');

        $validator
            ->scalar('postcode')
            ->maxLength('postcode', 255)
            ->allowEmptyString('postcode');

        $validator
            ->scalar('city')
            ->maxLength('city', 255)
            ->allowEmptyString('city');

        $validator
            ->scalar('state')
            ->maxLength('state', 255)
            ->allowEmptyString('state');

        $validator
            ->integer('status_id')
            ->allowEmptyString('status_id');

        $validator
            ->allowEmptyString('status_inactive');

        $validator
            ->allowEmptyString('status_update');

        $validator
            ->scalar('remember_token')
            ->maxLength('remember_token', 100)
            ->allowEmptyString('remember_token');

        $validator
            ->scalar('updated_by')
            ->maxLength('updated_by', 255)
            ->allowEmptyString('updated_by');

        $validator
            ->dateTime('created_at')
            ->allowEmptyDateTime('created_at');

        $validator
            ->dateTime('updated_at')
            ->allowEmptyDateTime('updated_at');

        return $validator;
    }

    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['email']), ['errorField' => 'email']);
        $rules->add($rules->existsIn(['department_id'], 'Departments'), ['errorField' => 'department_id']);
        $rules->add($rules->existsIn(['role_id'], 'Roles'), ['errorField' => 'role_id']);
        $rules->add($rules->existsIn(['status_id'], 'Statuses'), ['errorField' => 'status_id']);

        return $rules;
    }

    public static function defaultConnectionName(): string
    {
        return 'ssodb';
    }
}
