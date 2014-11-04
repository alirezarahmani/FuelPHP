<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Username', 'username', array('class'=>'control-label')); ?>

				<?php echo Form::input('username', Input::post('username', isset($user) ? $user->username : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Username')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Password', 'password', array('class'=>'control-label')); ?>

				<?php echo Form::input('password', Input::post('password', isset($user) ? $user->password : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Password')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Email', 'email', array('class'=>'control-label')); ?>

				<?php echo Form::input('email', Input::post('email', isset($user) ? $user->email : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Email')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Profile fields', 'profile_fields', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('profile_fields', Input::post('profile_fields', isset($user) ? $user->profile_fields : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Profile fields')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Last login', 'last_login', array('class'=>'control-label')); ?>

				<?php echo Form::input('last_login', Input::post('last_login', isset($user) ? $user->last_login : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Last login')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>
