<section class="konten mt2">	
	<div class="container-fluid">
		<div class="card border-dark">
			<div class="card-header bg-outline-primary"> 
				<?=$title; ?>

				<a href="<?=base_url('Pasien'); ?>" class="btn btn-outline-dark float-right">Kembali</a>
			</div>
			<div class="card-body"> 
				<form method="POST" action="<?=base_url('Pasien/update'); ?>">
					<input type="hidden" name="id_pasien" value="<?= $r['id_pasien']; ?>">
				  <div class="form-group">
				  	<label for="">Nama Pasien</label>
				  	<input type="text" name="nama_pasien" value="<?= $r['nama_pasien']; ?>" class="form-control" required>
				  </div>

				<div class="form-group">
				  <input class="form-check-input" type="radio" name="jenis_kelamin"  value="<?= $r['jenis_kelamin']; ?>" checked>
				  <label class="form-check-label" for="exampleRadios1">
				    Laki-laki
				  </label>
				</div>
				<div class="form-group">
				  <input class="form-check-input" type="radio" name="jenis_kelamin"  value="<?= $r['jenis_kelamin']; ?>">
				  <label class="form-check-label" for="exampleRadios2">
				    Perempuan
				  </label>
				</div>

				  <div class="form-group">
				  	<label for="">Umur</label>
				  	<input type="text" name="umur" value="<?= $r['umur']; ?>" class="form-control" required>
				  </div>

				  <button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
</section>