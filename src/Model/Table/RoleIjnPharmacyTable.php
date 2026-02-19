<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class RoleIjnPharmacyTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('role_ijncarepharmacy');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('SsoStatuses', [
            'foreignKey' => 'status_id',
        ]);
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->allowEmptyString('name');

        $validator
            ->integer('status_id')
            ->allowEmptyString('status_id');

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
