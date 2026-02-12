<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AccessRoleIjnCrrc Entity
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $role_id
 * @property int|null $status_id
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Cake\I18n\DateTime|null $created_at
 * @property \Cake\I18n\DateTime|null $updated_at
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Role $role
 * @property \App\Model\Entity\Status $status
 */
class AccessRoleIjnCrrc extends Entity
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
        'user_id' => true,
        'role_id' => true,
        'status_id' => true,
        'created_by' => true,
        'updated_by' => true,
        'created_at' => true,
        'updated_at' => true,
        'user' => true,
        'role' => true,
        'status' => true,
    ];
}
