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
    
  
</head>
<body>

            <?php echo $this->fetch('content'); ?>
      

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
