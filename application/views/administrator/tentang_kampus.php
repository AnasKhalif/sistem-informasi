<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
      <i class="fas fa-university"></i> TENTANG KAMPUS
    </div>

    <?php echo $this->session->flashdata('pesan') ?>

    <table class="table table-bordered table-hover table-striped">
    	<tr>
    		<th>NO</th>
    		<th>SEJARAH</th>
    		<th>VISI</th>
    		<th>MISI</th>
    		<th>AKSI</th>
    	</tr>

    	<?php 
    	$no = 1;

    	foreach($tentang as $ttg) : ?>
    		<tr>
    			<td><?php echo $no++ ?></td>
    			<td><?php echo $ttg->sejarah ?></td>
    			<td><?php echo $ttg->visi ?></td>
    			<td><?php echo $ttg->misi ?></td>
    			<td width="20px"><?php echo anchor('administrator/tentang_kampus/update/'.$ttg->id,'<div class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></div>') ?></td>
    		</tr>
    	<?php endforeach; ?>

    </table>
</div>

