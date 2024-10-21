<html>
	<head>
		<title><?= $title; ?></title>
		<link rel="stylesheet" href="<?=base_url(); ?>assets/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	</head>

<body>
	<a href="<?=base_url(); ?>">
		<button type="button" class="close" aria-label="Close">
  <span aria-hidden="true">&times;</span>
		</button>
	</a>
<div class="container">
	<h3>Permintaan Sarana Transformasi</h3>
	<hr>

	<h4 class="text-center">Input Data Permintaan Kendaraan Operasional
Divisi Umum - Sucofindo Cabang Dumai</h4>

	<table class="table">
		 <table class="table table-bordered text-center">
		 <thead>
		   <tr>
			 <th scope="col" >No</th>
				  <th scope="col">Nama Dokter</th>
					    </tr>
					  </thead>
					  <tbody>
					    <?php $no=1; foreach($dokter as $r){ ?>
					    	<tr>
					    		<td><?= $no; ?></td>
					    		<td><?= $r['nama_dokter']; ?></td>
					    			
					    		</td>
					    	</tr>
					    <?php $no++;} ?>	
					  </tbody>
					</table>
				  </table>


	<table width="100%">
		<thead>
			<tr>
				<td></td>
				<td></td>
				<td width="300px">
					<p>
						Dumai, <?= Date('d-M-y');?>
					<br>
					Direktur
					<br>
					<br>
					<br>
					___________________________
					<br>		
					</p>
					
				</td>
			</tr>
		</thead>
	</table>
</div>

</body>	
</html>