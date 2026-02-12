<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CrrcDashboardUser Entity
 *
 * @property int $id
 * @property int|null $user_sso_id
 * @property int|null $role_sso_id
 * @property int|null $status_sso_id
 * @property \Cake\I18n\DateTime|null $created_at
 * @property \Cake\I18n\DateTime|null $modified_at
 * @property int|null $inactive
 *
 * @property \App\Model\Entity\UserSso $user_sso
 * @property \App\Model\Entity\RoleSso $role_sso
 * @property \App\Model\Entity\StatusSso $status_sso
 */
class CrrcDashboardUser extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'user_sso_id' => true,
        'role_sso_id' => true,
        'status_sso_id' => true,
        'created_at' => true,
        'modified_at' => true,
        'inactive' => true,
        'user_sso' => true,
        'role_sso' => true,
        'status_sso' => true,
    ];
}
