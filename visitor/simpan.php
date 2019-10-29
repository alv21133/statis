<?php
include'konek.php';
$id=rand(10,7000);
$insert=$dbkonek->query("insert into user (no,nama,hp,company) values 
	('$id','$_POST[nama]','$_POST[nohp]','$_POST[company]')");
if ($insert) {
	header("location:tampil.php");
}else{
	echo "gagal simpan";

}
?>