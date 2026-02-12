<?php
declare (strict_types = 1);

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class SsoStatusesTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('statuses');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('AccessroleIjncrrc', [
            'foreignKey' => 'status_id',
        ]);
        $this->hasMany('RoleIjnCrrc', [
            'foreignKey' => 'status_id',
        ]);
        $this->hasMany('Roles', [
            'foreignKey' => 'status_id',
        ]);
        $this->hasMany('SsoUsers', [
            'foreignKey' => 'status_id',
        ]);
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->allowEmptyString('name');

        return $validator;
    }

    public static function defaultConnectionName(): string
    {
        return 'ssodb';
    }
}
