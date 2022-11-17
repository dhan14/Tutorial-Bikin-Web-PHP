<?php
$hostname="localhost";
$username="root";
$pass="";
$namadb="yusuf";

$koneksi= mysqli_connect($hostname,$username,$pass,$namadb);
if($koneksi){
	//echo 'Koneksi Masok';
}else{
	//echo 'Koneksi Gak Masok';
}
//$query = mysqli_query($koneksi,"Select * from barang order by nama_barang asc");
//var_dump(mysqli_fetch_object($query));
?>