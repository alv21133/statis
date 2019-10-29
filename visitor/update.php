<?php
include'konek.php';

$id=rand(10,7000);

$update= $dbkonek->query("update user set nama='$_POST[nama]',hp='$_POST[hp]' , company='$_POST[company]'  where no='$_POST[no]' ");

if ($update) {
	include'tampil.php';
}





?>