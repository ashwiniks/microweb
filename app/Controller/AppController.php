<?php
  
  class AppController extends Controller {
    public $components = array('Paginator',
        'Acl',
        'Auth' => array(
            'authorize' => array(
               
                'Actions' => array('actionPath' => 'controllers')
            )
        ),
        'Session'
    );
    public $helpers = array('Html', 'Form', 'Session');

    public function beforeFilter() {
        $this->Auth->allow('logout','dashboard','create');
        //Configure AuthComponent
        $this->Auth->loginAction = array(
          'controller' => 'users',
          'action' => 'login'
        );
        $this->Auth->logoutRedirect = array(
          'controller' => 'users',
          'action' => 'login'
        );
        $this->Auth->loginRedirect = array(
          'controller' => 'users',
          'action' => 'dashboard'
        );
    }
}
