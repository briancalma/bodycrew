<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 */
class UsersController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold;
	
    public function beforeFilter() 
    {
        parent::beforeFilter();
        
        $this->Auth->allow('signup','logout');
    }
    
    public function login()
    {
        if( $this->request->is('post') ) 
        {
            if( $this->Auth->login() ) 
            {
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Username or Password is incorrect!'));
        }
        
    }
        
    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }
    
    public function signup()
    {
       #  $this->add();
    }
}
