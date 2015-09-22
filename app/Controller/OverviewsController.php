<?php

  /*
   * To change this license header, choose License Headers in Project Properties.
   * To change this template file, choose Tools | Templates
   * and open the template in the editor.
   */

  App::uses('AppController', 'Controller');

  /**
   * CakePHP OverviewController
   * @author ashwinisingh
   */
  class OverviewsController extends AppController {
      
      public function index($id=null) {
         $this->layout="default2";
         $overview= $this->Overview->find('first',array('conditions'=>array('website_id'=>$id)));
         $this->set('overview',$overview);
          
      }

  }
  