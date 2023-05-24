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