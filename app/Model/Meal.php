<?php
App::uses('AppModel', 'Model');
/**
 * Meal Model
 *
 * @property User $User
 * @property Recipe $Recipe
 */
class Meal extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public function isOwnedBy($meal, $user) {
	    return $this->field('id', array('id' => $meal, 'user_id' => $user)) !== false;
	}

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Recipe' => array(
			'className' => 'Recipe',
			'joinTable' => 'meals_recipes',
			'foreignKey' => 'meal_id',
			'associationForeignKey' => 'recipe_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
