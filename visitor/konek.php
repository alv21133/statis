<?php
$host="localhost";
$user="root";
$password="";
$db="visitor";
$dbkonek=new mysqli("$host","$user","$password","$db");
if ($dbkonek->connect_error) {
echo "konek error ".$dbkonek->connect_error;
}else{
	// echo "koneksi berhasil";
}


?>
<html>
	<header>
		<link rel="stylesheet" href="../assets/vendor/bootstrap/bootstrap.min.css">

    <script src="../assets/vendor/bootstrap/jquery.min.js"> </script>
    <script src="../assets/js/style.js"> </script>
    <script src="../assets/vendor/bootstrap/popper.js">
    </script>
    <script src="../assets/vendor/bootstrap/bootstrap.min.js"></script>
	</header>

</html>