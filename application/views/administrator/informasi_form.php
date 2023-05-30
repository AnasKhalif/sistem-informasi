<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
      <i class="fas fa-university"></i> Form Input Data Informasi
    </div>

    <form method="post" action="<?php echo base_url('administrator/informasi/tambah_informasi_aksi') ?>">

    <div class="form-group">
    	<label>ICON</label>
        <input type="hidden" name="id_informasi" class="form-control">
    	<input type="text" name="icon" class="form-control">
    	<?php echo form_error('icon', '<div class="text-danger small ml-3">', '</div>') ?>
    </div>

    <div class="form-group">
    	<label>JUDUL INFORMASI</label>
    	<input type="text" name="judul_informasi" class="form-control">
    	<?php echo form_error('judul_informasi', '<div class="text-danger small ml-3">', '</div>') ?>
    </div>

    <div class="form-group">
    	<label>ISI INFORMASI</label>
    	<textarea type="text" name="isi_informasi" class="form-control" rows="3"></textarea>
    	<?php echo form_error('isi_informasi', '<div class="text-danger small ml-3">', '</div>') ?>
    </div>

    <button type="submit" class="btn btn-primary mb-5">Simpan</button>

    </form>
</div>