<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');
                //bootstrap core css
                echo $this->Html->css('bootstrap.min');
                // MetisMenu CSS
                echo $this->Html->css('metisMenu.min');
                // Custom CSS
                echo $this->Html->css('sb-admin-2');
                // Custom Fonts
                echo $this->Html->css('font-awesome.min');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
                
	?>
    
    <style>
        @media(min-width:768px) {
    #page-wrapper {
        position: inherit;
        margin: 0 0 0 0px;
        padding: 0 30px;
        border-left: 1px solid #e7e7e7;
    }
}
    </style>
</head>
<body> <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">SB Admin v2.0</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
              
                <li class="dropdown">
                      welcome <?php echo $this->Session->Flash(); ?><?php // echo $this->Session->write(Auth.username); ?>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                      
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="/microsite/users/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->


            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                    <?php echo $this->fetch('content'); ?>
                </div>
                <!-- /.col-lg-12 -->
                 
            </div>
            
                        
                    </div>
                </div>
                         
                        <!-- /.panel-body -->
                        <div class="panel-footer">
                           
                        </div>
                        <!-- /.panel-footer -->
              
                    <!-- /.panel .chat-panel -->
            
                <!-- /.col-lg-4 -->
        
            <!-- /.row -->
   
        <!-- /#page-wrapper -->

  
           
      

    <!-- jQuery -->
    <!-- jQuery -->
    <?php echo $this->Html->script('jquery.min'); ?>
   

    <!-- Bootstrap Core JavaScript -->
    <?php echo $this->Html->script('bootstrap.min'); ?>
  

    <!-- Metis Menu Plugin JavaScript -->
     <?php echo $this->Html->script('metisMenu.min'); ?>
    

    <!-- Morris Charts JavaScript -->
     <?php echo $this->Html->script('raphael-min'); ?>
     <?php echo $this->Html->script('morris.min'); ?>
     <?php echo $this->Html->script('morris-data'); ?>
    
    <!-- Custom Theme JavaScript -->
     <?php echo $this->Html->script('sb-admin-2'); ?>

</body>
</html>
