<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
      <i class="fas fa-university"></i> DAFTAR USER
    </div>

    <?php echo $this->session->flashdata('pesan') ?>

    <?php echo anchor('administrator/user/tambah_user','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah User</button>') ?>

    <table class="table table-bordered table-hover table-striped">
    	<tr>
    		<th>NO</th>
    		<th>USERNAME</th>
    		<th>EMAIL</th>
    		<th>LEVEL</th>
    		<th>BLOKIR</th>
    		<th colspan="2">AKSI</th>
    	</tr>

    	<?php 
    	$no = 1;

    	foreach($user as $usr) : ?>
    		<tr>
    			<td><?php echo $no++ ?></td>
    			<td><?php echo $usr->username ?></td>
    			<td><?php echo $usr->email ?></td>
    			<td><?php echo $usr->level ?></td>
    			<td><?php echo $usr->blokir ?></td>
    			<td width="20px"><?php echo anchor('administrator/user/update/'.$usr->id,'<div class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></div>') ?></td>
    			<td width="20px"><?php echo anchor('administrator/user/delete/'.$usr->id,'<div class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></div>') ?></td>
    		</tr>
    	<?php endforeach; ?>

    </table>
</div>