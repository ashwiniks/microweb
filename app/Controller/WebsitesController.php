<?php

  /*
   * To change this license header, choose License Headers in Project Properties.
   * To change this template file, choose Tools | Templates
   * and open the template in the editor.
   */

  App::uses('AppController', 'Controller');
  App::uses('Folder', 'Utility');
  App::uses('File', 'Utility');

  /**
   * CakePHP websiteController
   * @author ashwinisingh
   */
  class WebsitesController extends AppController {
     
      public $uses=array('Category','Builder');
      
      public function index($id) {
          
      }
      
      public function  create()
      {
          $this->layout='default1';
          $residential=$this->Category->find('list',array('conditions'=>array('parent_id=1')));
          $this->set('residential',$residential);
          $commercial=$this->Category->find('list',array('conditions'=>array('parent_id=2')));
          $this->set('commercial',$commercial);
          $builder=$this->Builder->find('list',array('fields'=>array('builder_name','builder_name')));
          $this->set('builder',$builder);
          $username=$this->Auth->user('username');
          if($this->request->is('post'))
          {
          $projectcategory=$this->request->data['websites']['proj_category'];
          //$projectcategory=$this->request->data['websites']['proj_category'];
          if($projectcategory=='residential')
          {
              $projsubcat=$this->request->data['websites']['residential'];
          }
          else
          {
              $projsubcat=$this->request->data['websites']['commercial'];
          }
          $projectname=$this->request->data['websites']['projectname'];
          $buildername=$this->request->data['websites']['builder_name'];
          $builderiname=$this->request->data['websites']['ibulder_name'];
          if ($buildername !== "Others") {
                  $sbunm = $buildername;
              } else {
                  $sbunm = $builderiname;
              }
              
              $filename = "projects/".$username. "/$sbunm";
              $newfile = "projects/" . $sbunm;
              if (file_exists($filename . "/" . $projectname)) {
                  echo "Error: Project already exists, Do not create duplicate project name! ";
                  exit;
              } else if (file_exists($filename)) {
                  //ignor builder name
              } else {
                  $path=WWW_ROOT."/".$filename;
                  //echo $path;
                   $dir = new Folder($path, true, 0777);
              }
         $src = WWW_ROOT."/".'include';
         
              $mk = WWW_ROOT."/".$filename;
              $dst = $mk . "/";

              if (copy($src . '/file.zip', $dst . 'file.zip')) {
                  $zip = new ZipArchive;
                  $zip->open($dst . '/file.zip');
                  if ($zip->extractTo($dst)) {
                      //$zip->deleteName($dst.'/file.zip'); 	
                      $zip->close();
                      //echo "'".$dst."file.zip'";
                      unlink($dst . 'file.zip');
                  }
                  $old = $dst . 'file';
                  $new = $dst . $projectname;
                 /*  if($bnm)
                    {
                    $new=$dst.$bnm;
                    }
                    else
                    {
                    $new=$dst.$ibnm;
                    }*/
                  //---------change -----
                if (file_exists($new)) {
                      echo 'Error:Project name already exists, Do not create duplicate project Name!';
                      exit;
                  } else {
                      rename($old, $new);
                  }
              }
          }
      
          }
                  
      
      public function add()
      {
          
          
      }
    }
  