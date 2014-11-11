<?php
App::uses('Recipe', 'Model');

/**
 * Recipe Test Case
 *
 */
class RecipeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.recipe',
		'app.collection',
		'app.user',
		'app.collections_recipe',
		'app.ingredient',
		'app.ingredients_recipe',
		'app.shoppinglist',
		'app.ingredients_shoppinglist',
		'app.meal',
		'app.meals_recipe'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Recipe = ClassRegistry::init('Recipe');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Recipe);

		parent::tearDown();
	}

}
