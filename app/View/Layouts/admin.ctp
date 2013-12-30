<?php
/**
 *
 *
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
$_loginPage = (isset($this->params['prefix']) && $this->params['prefix'] == 'admin') && ($this->params['controller'] == 'users') && ($this->params['action'] == 'admin_login');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

        /*Begin Add css*/
        echo $this->Html->css('bootstrap.css');

        echo $this->Html->css(array('font-awesome.min.css'));
        echo $this->Html->css(array('jquery.gritter.css'));
        echo $this->Html->css(array('nanoscroller'));
        echo $this->Html->css(array('bootstrap-switch'));
        echo $this->Html->css(array('bootstrap-datetimepicker.min'));
        echo $this->Html->css(array('select2.css'));
        echo $this->Html->css(array('slider.css'));
        echo $this->Html->css(array('style.css'));

        /*End Add css*/

        echo $this->Html->script('ckeditor/ckeditor.js');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body <?php if($_loginPage):?> class='texture' <?php endif; ?>>
    <?php if(!$_loginPage):?>
        <div id="head-nav" class="navbar navbar-default navbar-fixed-top">
            <?php  echo $this->element('navbar'); ?>
        </div>
    <?php endif; ?>
        <div id="cl-wrapper" <?php if($_loginPage):?> class="login-container" <?php endif; ?>>
            <?php echo $this->Session->flash(); ?>
            <?php echo $this->fetch('content'); ?>
        </div>
</body>
</html>
