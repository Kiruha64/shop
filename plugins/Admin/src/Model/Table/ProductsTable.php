<?php
namespace Admin\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Products Model
 *
 * @property \Admin\Model\Table\CategoriesTable&\Cake\ORM\Association\BelongsTo $Categories
 * @property \Admin\Model\Table\CategoriesTable&\Cake\ORM\Association\BelongsToMany
 *
 * @method \Admin\Model\Entity\Product get($primaryKey, $options = [])
 * @method \Admin\Model\Entity\Product newEntity($data = null, array $options = [])
 * @method \Admin\Model\Entity\Product[] newEntities(array $data, array $options = [])
 * @method \Admin\Model\Entity\Product|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Admin\Model\Entity\Product saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Admin\Model\Entity\Product patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Admin\Model\Entity\Product[] patchEntities($entities, array $data, array $options = [])
 * @method \Admin\Model\Entity\Product findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProductsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('products');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id',
            'joinType' => 'INNER',
            'className' => 'Admin.Categories',
        ]);
        $this->belongsTo('Typecategories', [
            'foreignKey' => 'typecategory_id',
            'joinType' => 'INNER',
            'className' => 'Admin.Typecategories',
        ]);

    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('price')
            ->requirePresence('price', 'create')
            ->notEmptyString('price');

        $validator
            ->scalar('img_name')
            ->requirePresence('img_name', 'create')
            ->notEmptyString('img_name');

        $validator
            ->scalar('img_path')
            ->requirePresence('img_path', 'create')
            ->notEmptyString('img_path');

        $validator
            ->integer('isset')
            ->requirePresence('isset', 'create')
            ->notEmptyString('isset');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['category_id'], 'Categories'));

        return $rules;
    }
}
