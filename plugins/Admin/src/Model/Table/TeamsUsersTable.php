<?php
namespace Admin\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TeamsUsers Model
 *
 * @property \Admin\Model\Table\TeamsTable&\Cake\ORM\Association\BelongsTo $Teams
 * @property \Admin\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \Admin\Model\Entity\TeamsUser get($primaryKey, $options = [])
 * @method \Admin\Model\Entity\TeamsUser newEntity($data = null, array $options = [])
 * @method \Admin\Model\Entity\TeamsUser[] newEntities(array $data, array $options = [])
 * @method \Admin\Model\Entity\TeamsUser|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Admin\Model\Entity\TeamsUser saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Admin\Model\Entity\TeamsUser patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Admin\Model\Entity\TeamsUser[] patchEntities($entities, array $data, array $options = [])
 * @method \Admin\Model\Entity\TeamsUser findOrCreate($search, callable $callback = null, $options = [])
 */
class TeamsUsersTable extends Table
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

        $this->setTable('teams_users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Teams', [
            'foreignKey' => 'team_id',
            'joinType' => 'INNER',
            'className' => 'Admin.Teams',
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
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

        $rules->add($rules->existsIn(['team_id'], 'Teams'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        $rules->add($rules->isUnique(['team_id', 'user_id']));
        return $rules;
    }



}
