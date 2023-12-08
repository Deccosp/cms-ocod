<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<div class="basic-form">
					<form method="Post" action="<?= base_url('admin/konfigurasi/edit')?>" enctype="multipart/form-data">
						<input type="hidden" name="id_konfigurasi" value="<?= $kon->id_konfigurasi;?>">
						<div class="card-title">
							<h4>Data Konfigurasi</h4>
						</div>
						<div class="form-group">
							<label>Judul Website</label>
							<input type="text" name="judul_website" value="<?= $kon->judul_website?>"
								class="form-control input-default">
						</div>
						<div class="form-group">
							<label>Profil Website</label>
							<textarea name="profil_website" class="form-control h-150px" rows="3"
								id="comment"><?= $kon->profil_website?></textarea>
						</div>
						<div class="form-group">
							<label>Instagram</label>
							<input type="text" name="instagram" value="<?= $kon->instagram?>"
								class="form-control input-default">
						</div>
						<div class="form-group">
							<label>Twitter</label>
							<input type="text" name="twitter" value="<?= $kon->twitter?>"
								class="form-control input-default">
						</div>
						<div class="form-group">
							<label>Facebook</label>
							<input type="text" name="facebook" value="<?= $kon->facebook?> "
								class="form-control input-default">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="text" name="email" value="<?= $kon->email?>"
								class="form-control input-default">
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<input type="text" name="alamat" value="<?= $kon->alamat?>"
								class="form-control input-default">
						</div>
						<div class="form-group">
							<label>No Whatssap</label>
							<input type="text" name="no_wa" value="<?= $kon->no_wa	?>"
								class="form-control input-default">
						</div>

						<button type="submit" class="btn mb-1 btn-rounded btn-outline-secondary">Simpan</button>

						<button type="submit" class="btn mb-1 btn-rounded btn-outline-light">Cancel</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
