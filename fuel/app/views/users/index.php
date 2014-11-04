<h2>Listing <span class='muted'>Users</span></h2>
<br>
<?php if ($users): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Username</th>
			<th>Password</th>
			<th>Email</th>
			<th>Profile fields</th>
			<th>Last login</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($users as $item): ?>		<tr>

			<td><?php echo $item->username; ?></td>
			<td><?php echo $item->password; ?></td>
			<td><?php echo $item->email; ?></td>
			<td><?php echo $item->profile_fields; ?></td>
			<td><?php echo $item->last_login; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('user/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('user/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('user/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-small btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Users.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('user/create', 'Add new User', array('class' => 'btn btn-success')); ?>

</p>
