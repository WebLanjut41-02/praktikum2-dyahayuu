<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Form Edit</title>
     <body>
<center>
<h2>Form Edit Penghuni </h2></center>
	</center>
	<?php foreach($tb_penghuni as $u){ ?>
	<form action="<?php echo base_url(). 'index.php/penghuni/update'; ?>" method="post">
			<div class="container">
		<div class="row mt-3">
		<div class="col-md-12">
		<div class="form-group">
	    <label for="nama">Nama</label>
	    <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan Nama" value="<?php echo $u->nama ?>">
	</div>
			<div class="row mt-3">
			<div class="col-md-12">
			<div class="form-group">
	   		 <label for="nama">Unit</label>
	   		 <input type="text" name="unit" class="form-control" id="nama" placeholder="Masukan Nama" value="<?php echo $u->unit ?>">
			</div>
			<div class="row mt-3">
			<div class="col-md-12">
			<div class="form-group">
	   		 <label for="nama">Ktp</label>
	   		 <input type="text" name="ktp" class="form-control" id="nama" placeholder="Masukan Nama" value="<?php echo $u->ktp ?>">
	   		</div>
				<button type="submit" name="submit" value="submit" class="btn btn-primary" >Submit</button>
	</form>	
	<?php } ?>
</body>
</html>