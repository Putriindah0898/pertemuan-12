<?php 


$con = mysqli_connect("localhost","root","","lat_database");

if (!$con) {
	die("Tidak dapat terhubung dengan database".mysqli_error());
}

$query =mysqli_query($con, "UPDATE tbl_mhs SET age ='40' WHERE firstName = 'Karina'AND lastName = 'Suwandi' ");
if ($query) {
	echo "<font color=red size=7>Data Berhasil diubah</font>";
}


mysqli_close($con);


 ?>