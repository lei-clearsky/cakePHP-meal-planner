<?php
App::uses('ShoppinglistsController', 'Controller');

/**
 * ShoppinglistsController Test Case
 *
 */
class ShoppinglistsControllerTest extends ControllerTestCase {

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
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
		$this->markTestIncomplete('testIndex not implemented.');
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
		$this->markTestIncomplete('testView not implemented.');
	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {
		$this->markTestIncomplete('testAdd not implemented.');
	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {
		$this->markTestIncomplete('testEdit not implemented.');
	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {
		$this->markTestIncomplete('testDelete not implemented.');
	}

}
