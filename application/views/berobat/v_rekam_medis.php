<section class="konten mt2">	
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<div class="card border-dark">
					<div class="card-header bg-outline-primary bg-success"> 
						Biodata Orang Sakit
					</div>

					<div class="card-body"> 
						<table class="table-sm">
							<tr>
								<th>Nama Pasien</th>
								<td> : </td>
								<td><?= $d['nama_pasien'];?></td>
							</tr>

							<tr>
								<th>umur</th>
								<td> : </td>
								<td><?= $d['umur'];?></td>
							</tr>

							<tr>
								<th>jenis kelamin</th>
								<td> : </td>
								<td><?= $d['jenis_kelamin'];?></td>
							</tr>
						</table>
					</div>
				</div>

			<div class="card border-dark mt-4">
					<div class="card-header bg-outline-primary bg-success bg-success"> 
						Riwayat Berobat
					</div>

					<div class="card-body"> 
						<table class="table table-striped">
							<thead>
							    <tr>
							      <th scope="col">No</th>
							      <th scope="col">Tanggal Berobat</th>
							      <th scope="col">Keluhan</th>
		                          
		                          <th scope="col">Hasil Diognasa</th>
							      <th scope="col">Penatalaksanan</th>
		                          
							    </tr>
					  		</thead>

					  		<tbody>
					  			<?php $no=1; foreach($riwayat as $r){ ?>
					    	<tr>
					    		<td><?= $no; ?></td>
					    		<td><?= $r['tgl_berobat']; ?></td>
					    		<td><?= $r['keluhan_pasien']; ?></td>
					    		<td><?= $r['hasil_diagnosa']; ?></td>
                                <td><?= $r['penatalaksanaan']; ?></td>                                
					    	</tr>
					    	<?php $no++;} ?>
					  		</tbody>
						</table>
					</div>
				</div>					
			</div>

			<!-- <div class="col-md-6">
				<div class="card border-dark">
					<div class="card-header bg-outline-primary"> 
						Biodata Orang Sakit 6
					</div>

					<div class="card-body"> 
						<table class="table-sm">
							<tr>
								<th>Nama Pasien</th>
								<td> : </td>
								<td><?= $d['nama_pasien'];?></td>
							</tr>

							<tr>
								<th>umur</th>
								<td> : </td>
								<td><?= $d['umur'];?></td>
							</tr>

							<tr>
								<th>jenis kelamin</th>
								<td> : </td>
								<td><?= $d['jenis_kelamin'];?></td>
							</tr>
						</table>
					</div>
				</div>
			</div> -->
		</div>
	</div>
</section>