<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<style>

input{
	width:100%;
	margin-bottom:15px;
	height:50px;
	border-radius:10px
}

</style>

<div class="col-md-6 offset-md-3" style="margin-top:10%">
<form  class="form-group"  action="update.php" method="POST">		
<?php
include 'konek.php';
	$ambil= $dbkonek->query("select * from user where no='$_GET[q]'");

	while ($data=mysqli_fetch_array($ambil)) {
			?>
				<h1 class="text-center">VISITOR</h1>
			<div class="from-group">
			<label style="margin-left:10px ">No</label><br>
			<input style="text-align: left" readonly type="txt" name="no" value="<?php echo $data['no'];?>"><br>
			</div>
			<div class="from-group">
			<label style="margin-left:10px ">Nama</label><br>
			<input style="text-align: left" type="txt" name="nama" value="<?php echo $data['nama'];?>"><br>
			</div>
			<div class="from-group">
			<label style="margin-left:10px ">No Telp</label><br>
			<input style="text-align: left" type="txt" name="hp" value="<?php echo $data['hp'];   ?>"><br>
			</div>
			<div class="from-group">
			<label style="margin-left:10px ">Company</label><br>
			<input style="text-align: left" type="txt" name="company" value="<?php echo $data['company'];   ?>"><br>
			</div>
			

				
				
			 
			<input type="submit" name="submit" value="simpan" class="btn btn-dark text-center" style="margin-top:35px; max-width:50%">
			
			
			<?php
	 } 
	 
	 
	 
	 ?>
</form>
</div>

