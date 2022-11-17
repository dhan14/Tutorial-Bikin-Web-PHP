# Tutorial-Bikin-Web-PHP
## Cara Buat Crud
### Koneksi DB
1. Buat koneksi *database.php* dengan format sebagai berikut :
```php
<?php
$hostname="";
$username="";
$pass="";
$namadb="";
$koneksi= mysqli_connect($hostname,$username,$pass,$namadb);
if($koneksi){
	//echo 'Koneksi Masok';
}else{
	//echo 'Koneksi Gak Masok';
}
?>
```

> Untuk $hostname jika di xampp isi dengan *localhost* tapi jika pada server hosting cukup dengan link database yang diberikan pihak hosting

> $username diisi dengan *root* pada xampp, jika pada hosting mengacu pada nama akun yang diberikan pada server database hosting.

> $password apabila di xampp cukup dikosongkan, tetapi pada saat hosting harus diisi

>$koneksi adalah variabel yang akan menghubungkan antara php dan mysql dengan menggunakan perintah _mysqli_connect()_

2. Memastikan database sudah aktif 
Tambahkan perintah ini :
```php
//Perintah query untuk akses tabel
$query = mysqli_query($koneksi,"Select * from namaTargetTabel order by nama_kolom asc");

//lakukan pembacaan objek data
var_dump(mysqli_fetch_object($query));
```
3.Jika terbaca maka hasilnya sebagai berikut 

### Menampilkan data (READ)
