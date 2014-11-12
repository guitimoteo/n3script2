<?php
App::uses('AppController', 'Controller');
/**
 * Usuarios Controller
 *
 * @property Usuario $Usuario
 * @property PaginatorComponent $Paginator
 */
class UsuariosController extends AppController {

    public $helpers     = array('Html','Form','Session');
    public $name        = 'Usuarios';
    
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
        $this->Usuario->recursive = 0;
        $this->set('usuarios', $this->Usuario->find('all'));
        $this->set('usuarios', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Usuario->exists($id)) {
            throw new NotFoundException(__('Usuario invalido'));
        }
        $options = array('conditions' => array('Usuario.' . $this->Usuario->primaryKey => $id));
        $this->set('usuario', $this->Usuario->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Usuario->create();
            if ($this->Usuario->save($this->request->data)) {
                $this->Session->setFlash(__('Usuario salvo.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('O usuário não pode ser salvo. Por favor, tente novamente.'));
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
        if (!$this->Usuario->exists($id)) {
            throw new NotFoundException(__('Usuario invalido'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Usuario->save($this->request->data)) {
                $this->Session->setFlash(__('O usuario foi salvo.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('O usuario não pode ser salvo. Por favor, tente novamente.'));
            }
        } else {
            $options = array('conditions' => array('Usuario.' . $this->Usuario->primaryKey => $id));
            $this->request->data = $this->Usuario->find('first', $options);
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
        $this->Usuario->id = $id;
        if (!$this->Usuario->exists()) {
            throw new NotFoundException(__('Usuário invalido'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Usuario->delete()) {
            $this->Session->setFlash(__('O usuario foi deletado'));
        } else {
            $this->Session->setFlash(__('O usuário não pode ser deletado. Por favor tente novamente'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    /**
     * Função para autenticação do usuário
     * @return type
     */
    public function login() {
        CakeLog::write('info', 'UsuariosController login()');
        $this->set('title_for_layout', __('Log in'));
        if ($this->request->is('post')) {
            CakeLog::write('info', '$this->request->is(post)');
            if ($this->Auth->login()) {
                $this->Session->setFlash(__('Usuário logado'), 'default', array('class' => 'success'));
                return $this->redirect(array('controller' => 'produtos', 'action' => 'index'));
            } else {
                $this->Session->setFlash($this->Auth->authError, 'default', array(), 'auth');
                $this->redirect($this->Auth->loginAction);
            }
        }
    }
    
    /**
     * Função para finalizar a autenticação do usuário da sessão
     */
    public function logout() {
        $this->redirect($this->Auth->logout());
    }

}
