<?php
namespace Admin\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Teams Model
 *
 * @property \Admin\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
// * @property \Admin\Model\Table\UsersTable&\Cake\ORM\Association\BelongsToMany $Users
 *
 * @method \Admin\Model\Entity\Team get($primaryKey, $options = [])
 * @method \Admin\Model\Entity\Team newEntity($data = null, array $options = [])
 * @method \Admin\Model\Entity\Team[] newEntities(array $data, array $options = [])
 * @method \Admin\Model\Entity\Team|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Admin\Model\Entity\Team saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Admin\Model\Entity\Team patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Admin\Model\Entity\Team[] patchEntities($entities, array $data, array $options = [])
 * @method \Admin\Model\Entity\Team findOrCreate($search, callable $callback = null, $options = [])
 */
class TeamsTable extends Table
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

        $this->setTable('teams');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
            'className' => 'Admin.Users',
        ]);
        $this->belongsToMany('Users', [
            'foreignKey' => 'team_id',
            'targetForeignKey' => 'user_id',
            'joinTable' => 'teams_users',
            'className' => 'Admin.Users',
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
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
