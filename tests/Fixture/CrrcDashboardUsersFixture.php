<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CrrcDashboardUsersFixture
 */
class CrrcDashboardUsersFixture extends TestFixture
{
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
                'user_sso_id' => 1,
                'role_sso_id' => 1,
                'status_sso_id' => 1,
                'created_at' => 1768870245,
                'modified_at' => 1768870245,
                'inactive' => 1,
            ],
        ];
        parent::init();
    }
}
