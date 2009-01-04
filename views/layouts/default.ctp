<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $html->charset(); ?>
	<title>
		<?php __('CakePHP: the rapid development php framework:'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	
	<?php
		echo $html->meta('icon');

		//echo $html->css('theme');
		//echo $html->css('cake.generic');
		echo $html->css('task');
		echo $html->css('rtm');
		echo $javascript->link('jquery');
		echo $scripts_for_layout;
	?>
</head>
<body>
    <!--<div id="titlebar">
        <a>
            <img alt="MyCard" src="/img/logo.png">
        </a>
    </div>-->
    <div id="content">
    <?php echo $this->element("appheader");?>
    <?php $session->flash(); ?>
    <?php echo $content_for_layout; ?>
    </div>
</body>
</html>
