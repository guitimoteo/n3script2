<?php
App::uses('AppModel', 'Model');
/**
 * Usuario Model
 *
 */
class Usuario extends AppModel {
    public $name     = 'Usuario';
    public $validate = array(
        'nome' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'É necessário preencher o nome'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'É necessário preencher a senha'
            )
        ),
        'Email' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'É necessário preencher o email'
            )
        ),
        'email' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'É necessário preencher o email'
            )
        )
    );
    
    /**
     * Antes de salvar, criptografa a senha do usuario.
     * @param type $options
     * @return boolean
     */
    public function beforeSave($options = array()) {
        if (!empty($this->data['Usuario']['password'])) {
            $this->data['Usuario']['password'] = AuthComponent::password($this->data['Usuario']['password']);
        }
        return true;
    }
}
