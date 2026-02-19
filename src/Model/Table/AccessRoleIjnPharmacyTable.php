<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class AccessRoleIjnPharmacyTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('accessrole_ijncarepharmacy');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('SsoUsers', [
            'foreignKey' => 'user_id',
        ]);
        $this->belongsTo('RoleIjnPharmacy', [
            'foreignKey' => 'role_id',
        ]);
        $this->belongsTo('SsoStatuses', [
            'foreignKey' => 'status_id',
        ]);
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('user_id')
            ->allowEmptyString('user_id');

        $validator
            ->integer('role_id')
            ->allowEmptyString('role_id');

        $validator
            ->integer('status_id')
            ->allowEmptyString('status_id');

        $validator
            ->scalar('created_by')
            ->maxLength('created_by', 255)
            ->allowEmptyString('created_by');

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

    public static function defaultConnectionName(): string
    {
        return 'ssodb';
    }
}
