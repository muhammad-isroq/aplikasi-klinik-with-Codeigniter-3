<section class="konten mt2">	
	<div class="container-fluid">
		<div class="card border-0">
			<div class="card-header bg-success text-center"> 
				<h2 class="text-light">Manajemen Data User</h2>

				<a href="<?=base_url('User/tambah'); ?>" class="btn btn-light float-right">Tambah</a>
			</div>
			<br>
			<form action="<?=base_url('User/search'); ?>" method="POST">
			<div class="input-group mb-2">
  			<input type="text" name="keyword" class="form-control" placeholder="Cari User" aria-label="Recipient's username" aria-describedby="button-addon2" autofocus autocomplete="off">
			 <div class="input-group-append">
			  <button class="btn btn-outline-success" type="submit" id="button-addon2">Cari</button>		
			  </div>
			</div>
			</form>
			<div class="card-body shadow-lg p-3 mb-5 bg-white rounded"> 
				<div class="table-responsive">
				  <table class="table">
				    <table class="table table-striped">
					  <thead>
					    <tr>
					      <th scope="col">No</th>
					      <th scope="col">Username</th>
					      <th scope="col">Password</th>
					      <th scope="col">Nama Lengkap</th>
					      <th scope="col">atur</th>
					    </tr>
					  </thead>
					  <tbody>
					    <?php $no=1; foreach($user as $r){ ?>
					    	<tr>
					    		<td><?= $no; ?></td>
					    		<td><?= $r['username']; ?></td>
					    		<td><?= $r['password']; ?></td>
					    		<td><?= $r['nama_lengkap']; ?></td>
					    		<td>
					    			<a href="<?=base_url().'User/edit/'.$r['id']; ?>" type="button" class="btn btn-outline-success">ubah</a> |
					    			<a href="<?=base_url().'User/hapus/'.$r['id']; ?>" type="button" class="btn btn-outline-success">hapus</a>
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
