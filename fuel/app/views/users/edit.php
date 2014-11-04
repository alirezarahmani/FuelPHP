<h2>Editing <span class='muted'>User</span></h2>
<br>

<?php echo render('user/_form'); ?>
<p>
	<?php echo Html::anchor('user/view/'.$user->id, 'View'); ?> |
	<?php echo Html::anchor('user', 'Back'); ?></p>
