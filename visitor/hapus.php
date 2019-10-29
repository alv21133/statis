<?php

include'konek.php';

$hapus=$dbkonek->query("delete from user where no='$_GET[q]'");

if ($hapus) {

	// echo "hapus berhasil";
	include'tampil.php';
}else{
	echo "gagal hapus";
}

?>