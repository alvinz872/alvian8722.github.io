<?php if (!defined('BASEPATH')) exit('NO direct script access allowed');

function konversiBulan($angka){

	$bulan=array('I', 'II', 'III', 'IV', 'V');
	
	$index=$angka-1;
	
	return $bulan[$index];
}

function konversiKelas($angka){

	$kelas=array('I (SATU)', 'II (DUA)', 'III (TIGA)', 'IV (EMPAT)', 'V (LIMA)');
	
	$index=$angka-1;
	
	return $kelas[$index];
}

?>