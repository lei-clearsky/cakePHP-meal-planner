<?php
App::uses('Shoppinglist', 'Model');

/**
 * Shoppinglist Test Case
 *
 */
class ShoppinglistTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.shoppinglist',
		'app.user',
		'app.ingredient',
		'app.recipe',
		'app.collection',
		'app.collections_recipe',
		'app.ingredients_recipe',
		'app.meal',
		'app.meals_recipe',
		'app.ingredients_shoppinglist'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Shoppinglist = ClassRegistry::init('Shoppinglist');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Shoppinglist);

		parent::tearDown();
	}

}
