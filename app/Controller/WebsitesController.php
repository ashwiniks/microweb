<?php

  App::uses('AppController', 'Controller');
  App::uses('Folder', 'Utility');
  App::uses('File', 'Utility');

  /**
   * CakePHP websiteController
   * @author ashwinisingh
   */
  class WebsitesController extends AppController {

      public $uses = array('Category', 'Builder','Website');

      public function index($id=null) {
         $this->layout="default1";
         $this->Paginator->settings = array('limit' => 2);
        $websites= $this->Paginator->paginate('Website');
        $this->set('websites',$websites);
      }

      public function create() {
          $this->layout = 'default1';
          $residential = $this->Category->find('list', array('conditions' => array('parent_id=1')));
          $this->set('residential', $residential);
          $commercial = $this->Category->find('list', array('conditions' => array('parent_id=2')));
          $this->set('commercial', $commercial);
          $builder = $this->Builder->find('list', array('fields' => array('builder_name', 'builder_name')));
          $this->set('builder', $builder);
          $username = $this->Auth->user('username');
          if ($this->request->is('post')) {
              $projectcategory = $this->request->data['Website']['project_category'];
              //$projectcategory=$this->request->data['Website']['proj_category'];
              if ($projectcategory == 'residential') {
                  $projsubcat = $this->request->data['Website']['residential'];
              } else {
                  $projsubcat = $this->request->data['Website']['commercial'];
              }
              $projectname = $this->request->data['Website']['project_name'];
              $buildername = $this->request->data['Website']['builder_name'];
              $builderiname = $this->request->data['Website']['ibulder_name'];
              $this->request->data['Website']['user_id']=$username;
              print_r($this->request->data);
              $this->Website->create();
              if($this->Website->save($this->request->data))
                     {
                         $this->Session->setFlash("data saved");
                     }
              if ($buildername !== "Others") {
                  $sbunm = $buildername;
              } else {
                  $sbunm = $builderiname;
              }

              $filename = "projects/" . $username . "/$sbunm";
              $newfile = "projects/" . $sbunm;
              if (file_exists($filename . "/" . $projectname)) {
                $this->Session->setFlash("this project already exists");
                  exit;
              } else if (file_exists($filename)) {
                  //ignor builder name
              } else {
                  $path = WWW_ROOT . "/" . $filename;
                  //echo $path;
                  $dir = new Folder($path, true, 0777);
                 
                     if($this->Website->save($this->request->data))
                     {
                         $this->Session->setFlash("data saved");
                     }
                
              }
              $src = WWW_ROOT . "/" . 'include';

              $mk = WWW_ROOT . "/" . $filename;
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
                  //chmod($old, 0777);
                  // chmod($new, 0777);
                  $this->chmod_r($old);

                  
                  //---------change -----
                  if (file_exists($new)) {
                     $this->Session->setFlash("this project already exists");
                      exit;
                  } else {
                      rename($old, $new);
                      $this->Session->setFlash("project created succesfully");
                     // $this->redirect('action'=>'index');
                  }
              }
          }
      }

      public function add() {
          
      }
      
     

      public function chmod_r($path) {
          $dir = new DirectoryIterator($path);
          foreach ($dir as $item) {
              chmod($item->getPathname(), 0777);
              if ($item->isDir() && !$item->isDot()) {
                  $this->chmod_r($item->getPathname());
              }
          }
      }

  }
  