<?php
namespace Admin\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property string $name
 * @property int $category_id
 * @property string $price
 * @property string $img_name
 * @property string $img_path
 * @property int $isset
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \Admin\Model\Entity\Category[] $categories
 */
class Product extends Entity
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
        'typecategory_id' => true,
        'user_id' => true,
        'price' => true,
        'img_name' => true,
        'img_path' => true,
        'isset' => true,
        'created' => true,
        'modified' => true,
    ];
}
