
<?php
include 'konek.php';

?>
<div class="container-fluid">
	<h1 class="text-center" style="margin-top:3%;">Visitor</h1>
	<div style="text-align:right; margin:9px">
		<a href="../" class="btn btn-info">Home</a>
		<a href="input.php" class="btn btn-info">daftar</a>
	</div>
	
<div class="row">

<table class=" table-striped" >
		<thead class="thead-dark">
			
		</thead>
<table class="table table-striped">
  <thead class="thead-dark">
    <tr class="text-center">
      
				<th scope="col">id</th>
				<th scope="col">Nama</th>
				<th scope="col">Nomor</th>
				<th scope="col">Company</th>
				<th scope="col">Update</th>
				<th scope="col">Action </th>
    </tr>
  </thead>


<?php
	$ambil= $dbkonek->query("select * from user");

	while ($data=mysqli_fetch_array($ambil)) {
			?>
			
			<tr class="text-center">
				<td><?php echo $data['no'];   ?></td>
				<td><?php echo $data['nama'];   ?></td>
				<td><?php echo $data['hp'];   ?></td>
				<td><?php echo $data['company'];   ?></td>
				<td><?php echo $data['date'];   ?></td>
				<td>
				<a class="btn btn-danger"  onclick="return confirm('yakin ingin mengapus..?')" href="hapus.php?q=<?php echo $data['no']?>">hapus</a>
			
				<a class="btn btn-success" href="edit.php?q=<?php echo $data['no']?>">edit</a>
				</td>
			</tr>


	 	<?php
	 } 

?>


</div>
</div>



</table>