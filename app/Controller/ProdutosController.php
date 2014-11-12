<?php

App::uses('AppController', 'Controller');

/**
 * Produtos Controller
 *
 * @property Produto $Produto
 * @property PaginatorComponent $Paginator
 */
class ProdutosController extends AppController {

    public $name = 'Produtos';
    public $helpers = array('Html', 'Form', 'Session');

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'Session');

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->loadModel('Usuario');
        $this->layout = '';
        $this->Produto->recursive = 0;
        $this->set('produtos', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Produto->exists($id)) {
            throw new NotFoundException(__('Produto inválido'));
        }
        $options = array('conditions' => array('Produto.' . $this->Produto->primaryKey => $id));
        $this->set('produto', $this->Produto->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        $this->layout = '';
        if ($this->Auth->user() == null) {
            $this->Session->setFlash(__('Por favor, identifique-se'));
            $this->redirect(array('controller' => 'usuarios', 'action' => 'login'));
        }
        if ($this->request->is('post')) {
            $this->Produto->create();
            if ($this->Produto->save($this->request->data)) {
                $this->Session->setFlash(__('O produto foi salvo.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('O produto não foi salvo. Por favor, tente novamente.'));
            }
        }
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->layout = '';
        if ($this->Auth->user() == null) {
            $this->Session->setFlash(__('Por favor, identifique-se'));
            $this->redirect(array('controller' => 'usuarios', 'action' => 'login'));
        }
        if (!$this->Produto->exists($id)) {
            throw new NotFoundException(__('Produto invalido'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Produto->save($this->request->data)) {
                $this->Session->setFlash(__('O produto foi salvo.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('O produto não pode ser salvo.'));
            }
        } else {
            $options = array('conditions' => array('Produto.' . $this->Produto->primaryKey => $id));
            $this->request->data = $this->Produto->find('first', $options);
        }
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Produto->id = $id;
        if (!$this->Produto->exists()) {
            throw new NotFoundException(__('Produto invalido'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Produto->delete()) {
            $this->Session->setFlash(__('O produto foi deletado.'));
        } else {
            $this->Session->setFlash(__('O produto não pode ser deletado.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
