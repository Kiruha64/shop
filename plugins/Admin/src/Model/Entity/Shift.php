<?php
namespace Admin\Model\Entity;

use Cake\ORM\Entity;

/**
 * Shift Entity
 *
 * @property int $id
 * @property int $time
 * @property int $user_id
 *
 * @property \Admin\Model\Entity\User $user
 */
class Shift extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'time' => true,
        'user_id' => true,
        'user' => true,
    ];
}
