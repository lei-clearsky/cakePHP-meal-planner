<?php
App::uses('AppModel', 'Model');
/**
 * Shoppinglist Model
 *
 * @property User $User
 * @property Ingredient $Ingredient
 */
class Shoppinglist extends AppModel {


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

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Ingredient' => array(
			'className' => 'Ingredient',
			'joinTable' => 'ingredients_shoppinglists',
			'foreignKey' => 'shoppinglist_id',
			'associationForeignKey' => 'ingredient_id',
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
