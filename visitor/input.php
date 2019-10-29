<?php
include'konek.php'
?>
<style>

input{
	width:100%;
	margin-bottom:15px;
	height:50px;
	border-radius:10px
}

</style>

<div class="col-md-6 offset-md-3" style="margin-top:10%">
<form  class="form-group"  action="simpan.php" method="POST">		

				<h1 class="text-center">VISITOR</h1>
		
			<div class="from-group">
			<label style="margin-left:10px ">Nama</label><br>
			<input style="text-align: left" type="txt" name="nama"><br>
			</div>
			<div class="from-group">
			<label style="margin-left:10px ">No Telp</label><br>
			<input style="text-align: left" type="number" name="nohp"><br>
			</div>
			<div class="from-group">
			<label style="margin-left:10px ">Company</label><br>
			<input style="text-align: left" type="txt" name="company"><br>
			</div> 
			<input type="submit" name="submit" value="simpan" class="btn btn-dark text-center" style="margin-top:35px; max-width:50%"> 
</form>
</div>