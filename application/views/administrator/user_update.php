<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
      <i class="fas fa-university"></i> FORM UPDATE USER
    </div>

    <?php foreach($user as $usr) : ?>

    <form method="post" action="<?php echo base_url('administrator/user/update_aksi') ?>">
		<div class="form-group">
			<label>Username</label>
			<input type="hidden" name="id" class="form-control" value="<?php echo $usr->id ?>">
			<input type="text" name="username" placeholder="Masukan Username" class="form-control" value="<?php echo $usr->username ?>">
			<?php echo form_error('username', '<div class="text-danger small ml-3">') ?>
		</div>

		<div class="form-group">
			<label>Password</label>
			<input type="text" name="password" placeholder="Masukan Password" class="form-control" value="<?php echo $usr->password ?>">
			<?php echo form_error('password', '<div class="text-danger small ml-3">') ?>
		</div>

		<div class="form-group">
			<label>Email</label>
			<input type="text" name="email" placeholder="Masukan Email" class="form-control" value="<?php echo $usr->email ?>">
			<?php echo form_error('email', '<div class="text-danger small ml-3">') ?>
		</div>

		<div class="form-group">
			<label>Level</label>
			<select name="level" class="form-control">
				<?php 
				if($level == 'admin'){
				 ?>
				<option value="admin" selected>Admin</option>
				<option value="mahasiswa">Mahasiswa</option>

			<?php 
				} elseif($level == 'mahasiswa'){ 
			 ?>
				<option value="admin">Admin</option>
				<option value="mahasiswa" selected>Mahasiswa</option>
			<?php 
				} else{
			 ?>
			 	<option value="admin">Admin</option>
				<option value="Mahasiswa">Mahasiswa</option>

			<?php } ?>

			</select>
			<?php echo form_error('level', '<div class="text-danger small ml-3">') ?>
		</div>

		<div class="form-group">
			<label>Blokir</label>
			<select name="blokir" class="form-control">
				<?php 
				if($blokir == 'Y'){
				 ?>
				<option value="Y" selected>Ya</option>
				<option value="N">Tidak</option>

			<?php 
				} elseif($blokir == 'N'){ 
			 ?>
				<option value="Y">Ya</option>
				<option value="N" selected>Tidak</option>
			<?php 
				} else{
			 ?>
			 	<option value="Y">Ya</option>
				<option value="N" selected>Tidak</option>

			<?php } ?>

			</select>
			<?php echo form_error('blokir', '<div class="text-danger small ml-3">') ?>
		</div>

		<button type="submit" class="btn btn-primary">Simpan</button>
	</form>
	<?php endforeach; ?>
</div>