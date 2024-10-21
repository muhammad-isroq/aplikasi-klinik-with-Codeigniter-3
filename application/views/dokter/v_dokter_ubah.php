<section class="konten mt2">	
	<div class="container-fluid">
		<div class="card border-dark">
			<div class="card-header bg-outline-primary"> 
				<?=$title; ?>

				<a href="<?=base_url('Dokter'); ?>" class="btn btn-outline-dark float-right">Kembali</a>
			</div>
			<div class="card-body"> 
				<form method="POST" action="<?=base_url('Dokter/update'); ?>">
					<input type="hidden" name="id_dokter" value="<?= $r['id_dokter']; ?>">
				  <div class="form-group">
				  	<label for="">Nama Dokter</label>
				  	<input type="text" name="nama_dokter" value="<?= $r['nama_dokter']; ?>" class="form-control" required>
				  </div>
				  <button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
</section>