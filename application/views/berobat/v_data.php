<section class="konten mt2">	
	<div class="container-fluid">
		<div class="card border-0">
			<div class="card-header bg-success text-center"> 
				<h2 class="text-light"><?=$title; ?></h2>

				<a href="<?=base_url('Berobat/tambah'); ?>" class="btn btn-light float-right">Tambah</a>
			</div>
			<div class="card-body shadow-lg p-3 mb-5 bg-white rounded"> 
				<div class="table-responsive">
				  <table class="table">
				    <table class="table table-striped">
					  <thead>
					    <tr>
					      <th scope="col">No</th>
					      <th scope="col">Tanggal</th>
					      <th scope="col">Nama Pasien</th>
                          <th scope="col">Umur</th>
                          <th scope="col">Jenis Kelamin</th>
					      <th scope="col">Nama Dokter</th>
                          <th scope="col">Rekam Medis</th>
					      <th scope="col">atur</th>
					    </tr>
					  </thead>
					  <tbody>
					    <?php $no=1; foreach($berobat as $r){ ?>
					    	<tr>
					    		<td><?= $no; ?></td>
					    		<td><?= $r['tgl_berobat']; ?></td>
					    		<td><?= $r['nama_pasien']; ?></td>
					    		<td><?= $r['umur']; ?></td>
                                <td><?= $r['jenis_kelamin']; ?></td>
                                <td><?= $r['nama_dokter']; ?></td>
                                <td>
                                    <a href="<?= base_url();?>Berobat/rekam/<?= $r['id_berobat'];?>" class="btn btn-outline-success">Rekam</a>
					    		<td>
					    			<a href="<?=base_url().'Berobat/edit/'.$r['id_berobat']; ?>" type="button" class="btn btn-outline-success">ubah</a> |
					    			<a href="<?=base_url().'Berobat/hapus/'.$r['id_berobat']; ?>" type="button" class="btn btn-outline-danger">hapus</a>
					    		</td>
					    	</tr>
					    <?php $no++;} ?>	
					  </tbody>
					</table>
				  </table>
				</div>
			</div>
		</div>
	</div>
</section>
