<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SsoUsersFixture
 */
class SsoUsersFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'users';
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
                'msgraph_id' => 'Lorem ipsum dolor sit amet',
                'staffno' => 'Lorem ipsum dolor sit amet',
                'salutation' => 'Lorem ipsum dolor sit amet',
                'name' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'icno' => 'Lorem ipsum dolor sit amet',
                'mail' => 'Lorem ipsum dolor sit amet',
                'position' => 'Lorem ipsum dolor sit amet',
                'department_id' => 1,
                'department' => 'Lorem ipsum dolor sit amet',
                'officenum' => 'Lorem ipsum dolor sit amet',
                'phone' => 'Lorem ipsum dolor sit amet',
                'role_id' => 1,
                'photo' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'new_photo' => 1,
                'add1' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'add2' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'add3' => 'Lorem ipsum dolor sit amet',
                'postcode' => 'Lorem ipsum dolor sit amet',
                'city' => 'Lorem ipsum dolor sit amet',
                'state' => 'Lorem ipsum dolor sit amet',
                'status_id' => 1,
                'status_inactive' => 1,
                'status_update' => 1,
                'remember_token' => 'Lorem ipsum dolor sit amet',
                'updated_by' => 'Lorem ipsum dolor sit amet',
                'created_at' => 1768870021,
                'updated_at' => 1768870021,
            ],
        ];
        parent::init();
    }
}
