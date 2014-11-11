<?php
App::uses('AppController', 'Controller');
/**
 * Shoppinglists Controller
 *
 * @property Shoppinglist $Shoppinglist
 * @property PaginatorComponent $Paginator
 */
class ShoppinglistsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Shoppinglist->recursive = 0;
		$this->set('shoppinglists', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Shoppinglist->exists($id)) {
			throw new NotFoundException(__('Invalid shoppinglist'));
		}
		$options = array('conditions' => array('Shoppinglist.' . $this->Shoppinglist->primaryKey => $id));
		$this->set('shoppinglist', $this->Shoppinglist->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Shoppinglist->create();
			if ($this->Shoppinglist->save($this->request->data)) {
				$this->Session->setFlash(__('The shoppinglist has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shoppinglist could not be saved. Please, try again.'));
			}
		}
		$users = $this->Shoppinglist->User->find('list');
		$ingredients = $this->Shoppinglist->Ingredient->find('list');
		$this->set(compact('users', 'ingredients'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Shoppinglist->exists($id)) {
			throw new NotFoundException(__('Invalid shoppinglist'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Shoppinglist->save($this->request->data)) {
				$this->Session->setFlash(__('The shoppinglist has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shoppinglist could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Shoppinglist.' . $this->Shoppinglist->primaryKey => $id));
			$this->request->data = $this->Shoppinglist->find('first', $options);
		}
		$users = $this->Shoppinglist->User->find('list');
		$ingredients = $this->Shoppinglist->Ingredient->find('list');
		$this->set(compact('users', 'ingredients'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Shoppinglist->id = $id;
		if (!$this->Shoppinglist->exists()) {
			throw new NotFoundException(__('Invalid shoppinglist'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Shoppinglist->delete()) {
			$this->Session->setFlash(__('The shoppinglist has been deleted.'));
		} else {
			$this->Session->setFlash(__('The shoppinglist could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
