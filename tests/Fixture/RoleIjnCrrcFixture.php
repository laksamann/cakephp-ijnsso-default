<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RoleIjnCrrcFixture
 */
class RoleIjnCrrcFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'role_ijncarecrrc';
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
                'name' => 'Lorem ipsum dolor sit amet',
                'status_id' => 1,
                'created_at' => 1768870412,
                'updated_at' => 1768870412,
            ],
        ];
        parent::init();
    }
}
