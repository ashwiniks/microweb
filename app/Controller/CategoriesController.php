<?php

  /*
   * To change this license header, choose License Headers in Project Properties.
   * To change this template file, choose Tools | Templates
   * and open the template in the editor.
   */

  App::uses('AppController', 'Controller');

  /**
   * CakePHP CategoriesController
   * @author ashwinisingh
   */
  class CategoriesController extends AppController {

      public function index($id) {
          
      }
      
      public function add() {
          $this->layout = 'default1';
          //print_r($this->request->data);
          $this->Paginator->settings = array(
          'limit' => 2);
          $data = $this->Paginator->paginate('Category');
          $this->set('data',$data);
          if ($this->request->is('post')) {
			$this->Category->create();
          if ($this->Category->save($this->request->data)) {
              $this->Session->setFlash("category added successfully");
          } else {
              $this->Session->setFlash("category not added ");
          }
          
          
          
      }
      $parents = $this->Category->find('list',array('conditions'=>array('parent_id=0')));
          $this->set(compact('parents'));
      }
      
      public function edit($id=null)
      {  
          $this->layout='default1';
          if($this->request->is('Post'))
          {
           
           if($id =null)
           {
               exit();
           }
           else
           {
               $this->Category->id=$id;
               if($this->Category->save($this->request->data))
               {
                $this->Session->setFlash('category edited succesfully');
               }
           }
          }
          $parents=$this->Category->find('list',array('fields'=>array('id','projectname'),'conditions'=>array("id=$id")));
         $this->set(compact('parents'));
          $options = array('conditions' => array('Category.' . $this->Category->primaryKey => $id));
          $category=$this->Category->find('first',$options);
         $this->request->data=$category;
         
          
      }
      
      public function delete($id=null)
      {
              $this->Category->id=$id;
              if($this->Category->delete($this->Category->id))
              {
                  $this->redirect('/Categories/add');
              }
         
          
      }
    
  }
  