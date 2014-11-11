<?php
App::uses('AppModel', 'Model');
/**
 * Ingredient Model
 *
 * @property Recipe $Recipe
 * @property Shoppinglist $Shoppinglist
 */
class Ingredient extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Recipe' => array(
			'className' => 'Recipe',
			'joinTable' => 'ingredients_recipes',
			'foreignKey' => 'ingredient_id',
			'associationForeignKey' => 'recipe_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Shoppinglist' => array(
			'className' => 'Shoppinglist',
			'joinTable' => 'ingredients_shoppinglists',
			'foreignKey' => 'ingredient_id',
			'associationForeignKey' => 'shoppinglist_id',
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
