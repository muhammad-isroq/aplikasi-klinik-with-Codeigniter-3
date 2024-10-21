<section class="konten mt2">	
	<div class="container-fluid">
		<div class="card border-0">
			<div class="card-header bg-success text-center"> 
				<h2 class="text-light">Manajemen Data Dokter</h2>

				<a href="<?=base_url('Dokter/tambah'); ?>" class="btn btn-light float-right">Tambah</a>
			</div>
			<br>
			<form action="<?=base_url('Dokter/search'); ?>" method="POST">
			<div class="input-group mb-2">
  			<input type="text" name="keyword" class="form-control" placeholder="Cari Dokter" aria-label="Recipient's username" aria-describedby="button-addon2" autofocus autocomplete="off">
			 <div class="input-group-append">
			  <button class="btn btn-outline-success" type="submit" id="button-addon2">Cari</button>		
			  </div>
			</div>
			</form>
			<div class="card-body"> 
				<div class="table-responsive">
				  <table class="table">
				    <table class="table table-striped ">
					  <thead>
					    <tr class="">
					      <th scope="col">No</th>
					      <th scope="col">Name</th>
					      <th scope="col">atur</th>
					    </tr>
					  </thead>
					  <tbody>
					    <?php $no=1; foreach($dokter as $r){ ?>
					    	<tr>
					    		<td><?= $no; ?></td>
					    		<td><?= $r['nama_dokter']; ?></td>
					    		<td>
					    			<a href="<?=base_url().'Dokter/edit/'.$r['id_dokter']; ?>" type="button" class="btn btn-outline-success">ubah</a> |
					    			<a href="<?=base_url().'Dokter/hapus/'.$r['id_dokter']; ?>" type="button" class="btn btn-outline-success">hapus</a>
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