<?php

  /*
   * To change this license header, choose License Headers in Project Properties.
   * To change this template file, choose Tools | Templates
   * and open the template in the editor.
   */

  App::uses('AppModel', 'Model');

  /**
   * CakePHP Category
   * @author ashwinisingh
   */
  class Category extends AppModel {
      public $name = 'Category';
      public $displayField = 'projectname';
     // public $actsAs = array('Tree'); 

      public  $belongsTo = array
(
    'ChildRecored' => array
    (
        'className' => 'Category',
        'foreignKey' => 'parent_id',
        'conditions' => '',
        'fields' => '',
        'order' => ''
    )
);
      
  }
  