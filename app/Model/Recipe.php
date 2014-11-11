<?php
App::uses('AppModel', 'Model');
/**
 * Recipe Model
 *
 * @property Collection $Collection
 * @property Ingredient $Ingredient
 * @property Meal $Meal
 */
class Recipe extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Collection' => array(
			'className' => 'Collection',
			'joinTable' => 'collections_recipes',
			'foreignKey' => 'recipe_id',
			'associationForeignKey' => 'collection_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Ingredient' => array(
			'className' => 'Ingredient',
			'joinTable' => 'ingredients_recipes',
			'foreignKey' => 'recipe_id',
			'associationForeignKey' => 'ingredient_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Meal' => array(
			'className' => 'Meal',
			'joinTable' => 'meals_recipes',
			'foreignKey' => 'recipe_id',
			'associationForeignKey' => 'meal_id',
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
