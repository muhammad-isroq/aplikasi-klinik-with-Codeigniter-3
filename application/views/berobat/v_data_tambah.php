<section class="konten mt2">	
	<div class="container-fluid">
		<div class="card border-dark">
			<div class="card-header bg-outline-primary"> 
				<?=$title; ?>

				<a href="<?=base_url('Berobat'); ?>" class="btn btn-outline-dark float-right">Kembali</a>
			</div>
			<div class="card-body"> 
				<form method="POST" action="<?=base_url('Berobat/insert'); ?>">
				  <div class="form-group">
				  	<label for="">Tanggal Berobat</label>
				  	<input type="date" name="tgl_berobat" class="form-control" required>
				  </div>

				  <div class="form-group">
				  	<label for="">Pasien</label>
				  	<select name="pasien" id="" class="form-control" required>
                        <option value="">- Pilih Pasien -</option>
                        <?php foreach($pasien as $r){ ?>
                        <option value=" <?= $r['id_pasien'];?>">
                            <?= $r['nama_pasien'];?>
                        </option>
                    <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
				  	<label for="">Dokter Tujuan</label>
				  	<select name="dokter" id="" class="form-control" required>
                        <option value="">- Pilih Dokter -</option>
                        <?php foreach($dokter as $r){ ?>
                        <option value=" <?= $r['id_dokter'];?>">
                            <?= $r['nama_dokter'];?>
                        </option>
                    <?php } ?>
                </select>
            </div>
				  <button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
</section>