<?php 


function skorNilai($nilai,$sks)
{
	if($nilai=='A') $skor=4*$sks;
	else if ($nilai == 'B') $skor=3*$sks;
		else if ($nilai == 'C') $skor=2*$sks;
			else if ($nilai == 'D') $skor=1*$sks;
				else $skor = 0;

		return $skor;

}

function cekNilai($nim, $kode, $nilKhs)
{
	$nilai = get_instance();
	$nilai->load->model('transkip_model');

	$nilai->db->select('*');
	$nilai->db->from('transkip_nilai');
	$nilai->db->where('nim', $nim);
	$nilai->db->where('kode_matakuliah', $kode);
	$query = $nilai->db->get()->row();


	if($query!=null)
	{
		if($nilKhs < $query->nilai)
		{
			$nilai->db->set('nilai',$nilKhs)
					  ->where('nim',$nim)
					  ->where('kode_matakuliah',$kode)
					  ->update('transkip_nilai');
		}
	}else{
		$data = array(
			'nim'=>$nim,
			'nilai'=>$nilKhs,
			'kode_matakuliah'=>$kode
		);

		$nilai->transkip_model->insert($data);
	}
}