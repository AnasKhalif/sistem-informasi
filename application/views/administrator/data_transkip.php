<div class="container-fluid">
	<center>
		<legend><strong>TRANSKIP NILAI</strong></legend>

		<table>
			<tr>
				<td>NIM</td>
				<td>: <?php echo $nim; ?></td>
			</tr>
			<tr>	

				<td>NAMA</td>
				<td>: <?php echo $nama; ?></td>
			</tr>
			<tr>

				<td>Program Studi</td>
				<td>: <?php echo $prodi; ?></td>
			</tr>
		</table>
	</center>

	<table class="table table-bordered table-hover table-striped mt-3">
		<tr>
			<td>NO</td>
			<td>KODE MATA KULIAH</td>
			<td>NAMA MATA KULIAH</td>
			<td align="center">SKS</td>
			<td align="center">NILAI</td>
			<td align="center">SKOR</td>
		</tr>

		<?php 
		$no = 1;
		$Jsks=0;
		$Jskor=0;

		foreach($transkip as $tr) : ?>

			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $tr->kode_matakuliah ?></td>
				<td><?php echo $tr->nama_matakuliah ?></td>
				<td align="center"><?php echo $tr->sks ?></td>
				<td align="center"><?php echo $tr->nilai ?></td>
				<td align="center"><?php echo skorNilai($tr->nilai,$tr->sks); ?></td>

				<?php 
				$Jsks+=$tr->sks;
				$Jskor+=skorNilai($tr->nilai,$tr->sks);
				 ?>
			</tr>

		<?php endforeach; ?>

			<tr>
				<td colspan="3">Jumlah</td>
				<td align="center"><?php echo $Jsks ?></td>
				<td></td>
				<td align="center"><?php echo $Jskor ?></td>
			</tr>
		
	</table>

	<p class="text-center">Indeks Prestasi Kumulatif : <?php echo number_format($Jskor/$Jsks,2) ?></p>
</div>