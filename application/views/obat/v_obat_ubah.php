<section class="konten mt2">	
	<div class="container-fluid">
		<div class="card border-dark">
			<div class="card-header bg-outline-primary"> 
				<?=$title; ?>

				<a href="<?=base_url('Obat'); ?>" class="btn btn-outline-dark float-right">Kembali</a>
			</div>
			<div class="card-body"> 
				<form method="POST" action="<?=base_url('Obat/update'); ?>">
					<input type="hidden" name="id_obat" value="<?= $r['id_obat']; ?>">
				  <div class="form-group">
				  	<label for="">Nama Obat</label>
				  	<input type="text" name="nama_obat" value="<?= $r['nama_obat']; ?>" class="form-control" required>
				  </div>
				  <button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
</section>