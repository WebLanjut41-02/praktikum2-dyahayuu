
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Form Input</title>
  </head>
  <body>
<center>
<h2>Form Input Penghuni </h2></center>
	<form action="<?php echo base_url(). 'index.php/penghuni/tambah_aksi'; ?>" method="post">
		<div class="container">
<div class="row mt-3">
	<div class="col-md-12">
	<div class="form-group">
	    <label for="nama">Nama</label>
	    <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan Nama">
	</div>

	<div class="form-group">
	    <label for="nama">Unit</label>
	    <input type="text" name="unit" class="form-control" id="nama" placeholder=" Masukan Unit ">
	</div>

	<div class="form-group">
	    <label for="nama">No Ktp</label>
	    <input type="text"  name="ktp" class="form-control" id="nama" placeholder="Masukan No Ktp ">
	</div>
	  <button type="submit" name="submit" value="submit" class="btn btn-primary" >Submit</button>
</div>
</div>
</div>
</form>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>