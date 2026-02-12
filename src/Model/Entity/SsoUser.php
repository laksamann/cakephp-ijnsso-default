<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

class SsoUser extends Entity
{
    protected array $_accessible = [
        'msgraph_id' => true,
        'staffno' => true,
        'salutation' => true,
        'name' => true,
        'email' => true,
        'icno' => true,
        'mail' => true,
        'position' => true,
        'department_id' => true,
        'department' => true,
        'officenum' => true,
        'phone' => true,
        'role_id' => true,
        'photo' => true,
        'new_photo' => true,
        'add1' => true,
        'add2' => true,
        'add3' => true,
        'postcode' => true,
        'city' => true,
        'state' => true,
        'status_id' => true,
        'status_inactive' => true,
        'status_update' => true,
        'remember_token' => true,
        'updated_by' => true,
        'created_at' => true,
        'updated_at' => true,
        'role' => true,
        'status' => true,
        'accessrole_ijncarecrrc' => true,
        'user_managers' => true,
        'user_tokens' => true,
    ];
}
