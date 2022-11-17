<?php
?><!DOCTYPE html>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!--Awal Navbar-->
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">sandalswallow</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">halaman utama <span class="sr-only">(current)</span></a></li>
        <li><a href="#">produk</a></li>
        
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    <!--Akhir Navbar-->
<!-- Awal Jumbotron-->
<div class="jumbotron">
  <h2>Hello, world!</h2>
  <p>...</p>
  <p><a class="btn btn-primary btn-lg" href="lain_lain/aga_lain/apaan_nih.html" role="button">apaan nih</a></p>
</div>
<!-- Akhir Jumbotron-->
<!-- awal tabel-->
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Tabel Barang</div>
  <div class="panel-body">
    <p>...</p>
  </div>
<br>
<br>
<br>
<?php //echo "mantap jiwa"?>
  <!-- Table -->
  <table cellpadding="2" cellspacing="0" border="1" class="table">
    <thead>
    	<th>Nomer</th>
    	<th>Nama Barang</th>
    	<th>Harga Barang</th>
    	<th>Deskripsi Barang</th>
    </thead>
    <tbody>
    	<?php
    	include ('database.php');
    	$query = mysqli_query($koneksi,"Select * from barang order by nama_barang asc");
    	$nomer=1;
//var_dump(mysqli_fetch_object($query));
    	while ($row=mysqli_fetch_object($query)) {
    		
    		echo "
<tr>
<td>".$nomer."</td>
<td>".$row->nama_barang."</td>
<td>".$row->harga_barang."</td>
<td>".$row->deskripsi."</td> 		";
    		$nomer++;
    	};
    	?>
    </tbody>
  </table>
</div>

<!-- Akhir tabel-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="asset/js/jquery-1.12.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="asset/js/bootstrap.min.js"></script>
  </body>
</html>