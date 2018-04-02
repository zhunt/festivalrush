<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Festivals Model
 *
 * @property \App\Model\Table\QuestionsTable|\Cake\ORM\Association\BelongsToMany $Questions
 * @property |\Cake\ORM\Association\BelongsToMany $Venues
 *
 * @method \App\Model\Entity\Festival get($primaryKey, $options = [])
 * @method \App\Model\Entity\Festival newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Festival[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Festival|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Festival patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Festival[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Festival findOrCreate($search, callable $callback = null, $options = [])
 */
class FestivalsTable extends Table
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

        $this->setTable('festivals');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsToMany('Questions', [
            'foreignKey' => 'festival_id',
            'targetForeignKey' => 'question_id',
            'joinTable' => 'festivals_questions'
        ]);
        $this->belongsToMany('Venues', [
            'foreignKey' => 'festival_id',
            'targetForeignKey' => 'venue_id',
            'joinTable' => 'festivals_venues'
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
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('festival_description')
            ->requirePresence('festival_description', 'create')
            ->notEmpty('festival_description');

        $validator
            ->requirePresence('festival_start_date', 'create')
            ->allowEmpty('festival_start_date');

        $validator
            ->requirePresence('festival_end_date', 'create')
            ->allowEmpty('festival_end_date');

        $validator
            ->scalar('festival_month')
            ->maxLength('festival_month', 255)
            ->requirePresence('festival_month', 'create')
            ->allowEmpty('festival_month');

        $validator
            ->scalar('festival_logo_image')
            ->maxLength('festival_logo_image', 255)
            ->requirePresence('festival_logo_image', 'create')
            ->allowEmpty('festival_logo_image');

        return $validator;
    }
}
