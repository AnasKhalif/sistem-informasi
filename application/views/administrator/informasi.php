<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
      <i class="fas fa-university"></i> INFORMASI
    </div>

    <?php echo $this->session->flashdata('pesan') ?>

    <?php echo anchor('administrator/informasi/tambah_informasi','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Informasi</button>') ?>

	<table class="table table-striped table-hover table-bordered">
		<tr>
			<th>NO</th>
			<th>ICON</th>
			<th>JUDUL INFORMASI</th>
			<th>ISI INFORMASI</th>
			<th colspan="2">AKSI</th>

			<?php 
			$no = 1;
			foreach( $informasi as $info ) : ?>

				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $info->icon ?></td>
					<td><?php echo $info->judul_informasi ?></td>
					<td><?php echo $info->isi_informasi ?></td>
					<td width="20px"><?php echo anchor('administrator/informasi/update/'.$info->id_informasi,'<div class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></div>') ?></td>
    				<td width="20px"><?php echo anchor('administrator/informasi/delete/'.$info->id_informasi,'<div class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></div>') ?></td>
				</tr>

			<?php endforeach; ?>
		</tr>
	</table>
</div>

