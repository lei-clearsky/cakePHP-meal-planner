<?php
App::uses('AppController', 'Controller');
/**
 * Meals Controller
 *
 * @property Meal $Meal
 * @property PaginatorComponent $Paginator
 */
class MealsController extends AppController {

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
		$this->Meal->recursive = 1;
		$this->set('meals', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Meal->exists($id)) {
			throw new NotFoundException(__('Invalid meal'));
		}
		$options = array('conditions' => array('Meal.' . $this->Meal->primaryKey => $id));
		$this->set('meal', $this->Meal->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			//User Authentitation
			$this->request->data['Meal']['user_id'] = $this->Auth->user('id');
			$this->Meal->create();
			if ($this->Meal->save($this->request->data)) {
				$this->Session->setFlash(__('The meal has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The meal could not be saved. Please, try again.'));
			}
		}
		$users = $this->Meal->User->find('list');
		$recipes = $this->Meal->Recipe->find('list');
		$this->set(compact('users', 'recipes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Meal->exists($id)) {
			throw new NotFoundException(__('Invalid meal'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Meal->save($this->request->data)) {
				$this->Session->setFlash(__('The meal has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The meal could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Meal.' . $this->Meal->primaryKey => $id));
			$this->request->data = $this->Meal->find('first', $options);
		}
		$users = $this->Meal->User->find('list');
		$recipes = $this->Meal->Recipe->find('list');
		$this->set(compact('users', 'recipes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Meal->id = $id;
		if (!$this->Meal->exists()) {
			throw new NotFoundException(__('Invalid meal'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Meal->delete()) {
			$this->Session->setFlash(__('The meal has been deleted.'));
		} else {
			$this->Session->setFlash(__('The meal could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function isAuthorized($user) {
	    // All registered users can add posts
	    if ($this->action === 'add') {
	        return true;
	    }

	    // The owner of a post can edit and delete it
	    if (in_array($this->action, array('edit', 'delete'))) {
	        $mealId = (int) $this->request->params['pass'][0];
	        if ($this->Meal->isOwnedBy($mealId, $user['id'])) {
	            return true;
	        }
	    }

	    return parent::isAuthorized($user);
	}
}
