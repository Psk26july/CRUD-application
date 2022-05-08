<!doctype html>
<html>
<head>
	<title>CURD Application - Create User</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assest/css/bootstrap.min.css';?>">
</head>
<body>
	<div class ="navbar navbar-dark bg-dark">
		<div>
			<a href="#" class = "navbar-brand">CRUD Application</a>
		</div>	
	</div>
	<div class ="container" style="padding-top: 10px;">
		<h3>Create New User</h3>
		<hr>
		<form method="post" name="createUser" action ="<?php echo base_url().'index.php/user/create';?>">
		<div class="row">
			
			<div class ="col-md-6">
				<div class ="form-group">
					<label>Name</label>
					<input type="text" name="name" value="<?php echo set_value('name'); ?>" class="form-control">
					<?php echo form_error('name');?>	
				</div>	
				<div class ="form-group">
					<label>Age</label>
					<input type="text" name="age" value="<?php echo set_value('age'); ?>" class="form-control">
					<?php echo form_error('age'); ?>	
				</div>
				<div class ="form-group">
					<label>Phone Number</label>
					<input type="text" name="phone_no" value="<?php echo set_value('phone_no'); ?>" class="form-control">
					<?php echo form_error('phone_no'); ?>	
				</div>
				<div class ="form-group">
					<label>Subject</label>
					<input type="text" name="subject" value="<?php echo set_value('subject'); ?>" class="form-control">
					<?php echo form_error('subject'); ?>	
				</div>
				<div class ="form-group">
					<button class="btn btn-primary">Create</button>
					<a href="<?php echo base_url().'index.php/user/index'; ?>" class="btn-secondary btn">Cancle</a>
				</div>
			</div>
			
		</div>
		</form>
	</div>

</body>
</html>