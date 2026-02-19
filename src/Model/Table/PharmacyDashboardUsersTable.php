<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class PharmacyDashboardUsersTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('pharmacy_dashboard_users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('UserSsos', [
            'foreignKey' => 'user_sso_id',
            'className' => 'SsoUsers',
        ]);
        $this->belongsTo('RoleSsos', [
            'foreignKey' => 'role_sso_id',
            'className' => 'RoleIjnPharmacy',
        ]);
        $this->belongsTo('StatusSsos', [
            'foreignKey' => 'status_sso_id',
            'className' => 'SsoStatuses',
        ]);
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->allowEmptyString('user_sso_id')
            ->add('user_sso_id', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->nonNegativeInteger('role_sso_id')
            ->allowEmptyString('role_sso_id');

        $validator
            ->nonNegativeInteger('status_sso_id')
            ->allowEmptyString('status_sso_id');

        $validator
            ->dateTime('created_at')
            ->allowEmptyDateTime('created_at');

        $validator
            ->dateTime('modified_at')
            ->allowEmptyDateTime('modified_at');

        $validator
            ->allowEmptyString('inactive');

        return $validator;
    }

    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['id']), ['errorField' => 'id']);
        $rules->add($rules->isUnique(['user_sso_id'], ['allowMultipleNulls' => true]), ['errorField' => 'user_sso_id']);
        $rules->add($rules->existsIn(['user_sso_id'], 'UserSsos'), ['errorField' => 'user_sso_id']);
        $rules->add($rules->existsIn(['role_sso_id'], 'RoleSsos'), ['errorField' => 'role_sso_id']);
        $rules->add($rules->existsIn(['status_sso_id'], 'StatusSsos'), ['errorField' => 'status_sso_id']);

        return $rules;
    }
}
