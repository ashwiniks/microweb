<?php

  /*
   * To change this license header, choose License Headers in Project Properties.
   * To change this template file, choose Tools | Templates
   * and open the template in the editor.
   */

  App::uses('AppController', 'Controller');

  /**
   * CakePHP BuildersController
   * @author ashwinisingh
   */
  class BuildersController extends AppController {
  
      public function index($id) {
          
      }
      
      public function add()
      {
          $this->layout="default1";
          if($this->request->is('post') )
          {
             $bui= $this->request->data['Builder']['builder_name'];
          $allbuilder=$this->Builder->find('all',array('conditions'=>array("builder_name" => "$bui")));
              print_r($allbuilder);
              if(count($allbuilder))
              {
              
             $this->Session->setFlash("builder already exist ");
             }
            else {
                echo "else";
                if($this->Builder->save($this->request->data))
              {
                  $this->Session->setFlash("builder added successfully");
              }
            }
              }
              
              $this->Paginator->settings = array('limit' => 2);
              $builders=$this->Paginator->paginate('Builder');
              $this->set('builder',$builders);
              
              
          }
          
          public function edit($id=null)
          {
              
              
          }
          
          
          public function delete($id=null)
          {
              $this->Builder->id=$id;
              if($this->Builder->delete($this->Builder->id))
              {
                  $this->redirect(array('','action'=>'add'));
                  $this->Session->setFlash('deleted ......');
                  
              }
              
          }
      }

  
  