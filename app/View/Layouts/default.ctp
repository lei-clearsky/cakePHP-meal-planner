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

		echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('bootstrap-theme');
		echo $this->Html->css('style');
		echo $this->Html->script('jquery-1.11.1');
		echo $this->Html->script('bootstrap');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<!-- Navbar -->
		<div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">My Recipes</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><?php echo $this->Html->link(__('Meals'), array('controller' => 'meals', 'action' => 'index')); ?></li>
              <li><?php echo $this->Html->link(__('Collections'), array('controller' => 'collections', 'action' => 'index')); ?></li>
              <li><?php echo $this->Html->link(__('Search Recipes'), array('controller' => 'recipes', 'action' => 'index')); ?></li>
              <li><?php echo $this->Html->link(__('Shopping List'), array('controller' => 'shoppinglists', 'action' => 'index')); ?></li>
              
            </ul>
            <ul class="nav navbar-nav navbar-right">
            	<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                	<?php if($loggedIn): ?>
                		<li><?php echo $this->Html->link(__('Sign Out'), array('controller' => 'users', 'action' => 'logout')); ?></li> <!--after logout, which view will be displayed? -->
                	<?php else: ?>
                		<li><?php echo $this->Html->link(__('Sign In'), array('controller' => 'users', 'action' => 'login')); ?></li>
                		<li><?php echo $this->Html->link(__('Join'), array('controller' => 'users', 'action' => 'register')); ?></li>

                	<?php endif; ?>
                  
                </ul>
              </li>
              	
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>
	
	<!-- End Navbar -->
	<div id="container" class="container">
		<div id="header">
			<!--<h1><?php //echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>-->

		</div>

		<div id="content">


			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<!-- footer -->
		</div>
	</div>
	<!-- sql dump
		<?php //echo $this->element('sql_dump'); ?>
	-->
</body>
</html>
