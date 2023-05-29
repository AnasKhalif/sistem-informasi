<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
      <i class="fa fa-eye"></i> Detail Dosen
    </div>

    <table class="table table-hover table-bordered table-striped">

    	<?php foreach($detail as $dt) : ?>

    	<img class="mb-4" src="<?php echo base_url('assets/uploads/').$dt->photo ?>" style="width: 20%">

    	<tr>
    		<td>NIDN</td>
    		<td><?php echo $dt->nidn; ?></td>
    	</tr>

    	<tr>
    		<td>NAMA DOSEN</td>
    		<td><?php echo $dt->nama_dosen; ?></td>
    	</tr>

    	<tr>
    		<td>ALAMAT</td>
    		<td><?php echo $dt->alamat; ?></td>
    	</tr>

    	<tr>
    		<td>JENIS KELAMIN</td>
    		<td><?php echo $dt->jenis_kelamin; ?></td>
    	</tr>

    	<tr>
    		<td>EMAIL</td>
    		<td><?php echo $dt->email; ?></td>
    	</tr>

    	<tr>
    		<td>NO. TELEPON</td>
    		<td><?php echo $dt->telepon; ?></td>
    	</tr>

    <?php endforeach; ?>

    </table>

    <?php echo anchor('administrator/dosen','<div class="btn btn-sm btn-primary">Kembali</div>') ?>
</div>