<div class="cards form">
<?php echo $form->create('Card',array('enctype'=>'multipart/form-data'));?>
 		<h2><?php __('Add Card');?></h2>
	<?php
		echo $form->input('name');
		echo $form->file('header');
		echo $form->input('display_name');
		echo $form->input('email');
		echo $form->input('mobile');
	?>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Cards', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Users', true), array('controller'=> 'users', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller'=> 'users', 'action'=>'add')); ?> </li>
	</ul>
</div>
