<h2>Viewing <span class='muted'>#<?php echo $user->id; ?></span></h2>

<p>
	<strong>Username:</strong>
	<?php echo $user->username; ?></p>
<p>
	<strong>Password:</strong>
	<?php echo $user->password; ?></p>
<p>
	<strong>Email:</strong>
	<?php echo $user->email; ?></p>
<p>
	<strong>Profile fields:</strong>
	<?php echo $user->profile_fields; ?></p>
<p>
	<strong>Last login:</strong>
	<?php echo $user->last_login; ?></p>

<?php echo Html::anchor('user/edit/'.$user->id, 'Edit'); ?> |
<?php echo Html::anchor('user', 'Back'); ?>
