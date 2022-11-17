# Tutorial-Bikin-Web-PHP
## Cara Buat Crud
### Koneksi DB
1. Buat koneksi database dengan format sebagai berikut :
```php
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
```
### Menampilkan data (READ)
