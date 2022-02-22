<?php
namespace Admin\Model\Entity;

use Cake\ORM\Entity;

/**
 * Typecategory Entity
 *
 * @property int $id
 * @property string $name
 * @property int $category_id
 *
 * @property \Admin\Model\Entity\Category $category
 */
class Typecategory extends Entity
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
        'name' => true,
        'category_id' => true,
        'products' => true,
        'user_id' => true,


    ];
}
