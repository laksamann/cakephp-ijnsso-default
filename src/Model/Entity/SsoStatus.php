<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

class SsoStatus extends Entity
{
    
    protected array $_accessible = [
        'name' => true,
        'accessrole_ijncarecrrc' => true,
        'directories' => true,
        'role_ers' => true,
        'role_icutv' => true,
        'role_ijncarecrrc' => true,
        'roles' => true,
        'users' => true,
    ];
}
