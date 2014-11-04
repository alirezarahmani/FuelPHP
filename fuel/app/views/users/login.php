<h2>Login</h2>

Login to your account using your username and password.

<div class="input required">
<?php isset($errors) ? $errors : false; ?>

<?php echo Form::open('users/login'); ?>


    <?php echo Form::label('Username', 'username'); ?>

    <?php echo Form::input('username', null, array('size' => 30)); ?>

</div>

<div class="input password required">

    <?php echo Form::label('Password', 'password'); ?>

    <?php echo Form::password('password', null, array('size' => 30)); ?>

</div>

<div class="submit" >
    <?php echo Form::submit('login', 'Login'); ?>
</div>
