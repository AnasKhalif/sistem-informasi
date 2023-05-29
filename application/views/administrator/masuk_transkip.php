<div class="container-fluid">
	
	<div class="alert alert-success">
		<i class="fas fa-university"></i> Form Masuk Halaman Transkip Nilai
	</div>

	<form method="post" action="<?php echo base_url('administrator/transkip_nilai/buat_transkip_aksi') ?>">
		
		<div class="form-group">
			<label>NIM</label>
			<input type="text" name="nim" class="form-control" placeholder="Masukan Nim Mahasiswa">

			<?php echo form_error('nim','<div class="text-danger small ml-2">','</div>') ?>
		</div>

		<button type="submit" class="btn btn-primary">Proses</button>

	</form>
</div>