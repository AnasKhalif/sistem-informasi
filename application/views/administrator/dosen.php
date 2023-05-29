<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
      <i class="fas fa-university"></i> Dosen
    </div>

    <?php echo $this->session->flashdata('pesan') ?>

    <?php echo anchor('administrator/dosen/tambah_dosen','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Dosen</button>') ?>

	<table class="table table-striped table-hover table-bordered">
		<tr>
			<th>NO</th>
			<th>NIDN</th>
			<th>NAMA DOSEN</th>
			<th>ALAMAT</th>
			<th colspan="3">AKSI</th>

			<?php 
			$no = 1;
			foreach( $dosen as $dsn ) : ?>

				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $dsn->nidn ?></td>
					<td><?php echo $dsn->nama_dosen ?></td>
					<td><?php echo $dsn->alamat ?></td>
					<td width="20px"><?php echo anchor('administrator/dosen/detail/'.$dsn->nidn,'<div class="btn btn-sm btn-info"><i class="fas fa-eye"></i></div>') ?></td>
					<td width="20px"><?php echo anchor('administrator/dosen/update/'.$dsn->nidn,'<div class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></div>') ?></td>
    				<td width="20px"><?php echo anchor('administrator/dosen/delete/'.$dsn->nidn,'<div class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></div>') ?></td>
				</tr>

			<?php endforeach; ?>
		</tr>
	</table>
</div>

