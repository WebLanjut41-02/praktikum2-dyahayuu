 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


<center><h1>Data Penghuni</h1></center>
<center><?php echo anchor('penghuni/tambah','Tambah Data'); ?></center><br>
<div class="container">           
  <table class="table table-striped">
  	  <thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Unit</th>
			<th>Ktp</th>
			<th>Action</th>
		</tr>
	</thead>
		<?php 
		$no = 1;
		foreach($tb_penghuni as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->unit ?></td>
			<td><?php echo $u->ktp ?></td>
			<td>
			      <?php echo anchor('penghuni/edit/'.$u->id,'Edit'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>