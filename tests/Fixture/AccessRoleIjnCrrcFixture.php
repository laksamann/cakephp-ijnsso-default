<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AccessRoleIjnCrrcFixture
 */
class AccessRoleIjnCrrcFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'accessrole_ijncarecrrc';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'user_id' => 1,
                'role_id' => 1,
                'status_id' => 1,
                'created_by' => 'Lorem ipsum dolor sit amet',
                'updated_by' => 'Lorem ipsum dolor sit amet',
                'created_at' => 1768870397,
                'updated_at' => 1768870397,
            ],
        ];
        parent::init();
    }
}
