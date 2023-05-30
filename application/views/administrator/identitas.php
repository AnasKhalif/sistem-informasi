<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
      <i class="fas fa-university"></i> IDENTITAS WEBSITE
    </div>

    <?php echo $this->session->flashdata('pesan') ?>

    <table class="table table-bordered table-hover table-striped">
    	<tr>
    		<th>NO</th>
    		<th>JUDUL WEBSITE</th>
    		<th>ALAMAT</th>
    		<th>EMAIL</th>
    		<th>No. TELEPON</th>
    		<th>AKSI</th>
    	</tr>

    	<?php 
    	$no = 1;

    	foreach($identitas as $idn) : ?>
    		<tr>
    			<td><?php echo $no++ ?></td>
    			<td><?php echo $idn->judul_website ?></td>
    			<td><?php echo $idn->alamat ?></td>
    			<td><?php echo $idn->email ?></td>
    			<td><?php echo $idn->telepon ?></td>
    			<td width="20px"><?php echo anchor('administrator/identitas/update/'.$idn->id_identitas,'<div class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></div>') ?></td>
    		</tr>
    	<?php endforeach; ?>

    </table>
</div>