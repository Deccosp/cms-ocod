<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<div class="card-title">
					<h4>Input Caraousel</h4>
				</div>
				<div class="basic-form">
					<form method="Post" action="<?= base_url('admin/caraousel/simpan')?>" enctype="multipart/form-data">
						<div class="form-group">
							<label>Judul</label>
							<input type="text" name="judul" class="form-control input-default" placeholder="">
						</div>
						<div class="form-group">
							<input type="file" name="foto" class="form-control"
								accept="image/png, image/jpg ,image/jpeg">
						</div>
						<button type="submit" class="btn mb-1 btn-rounded btn-outline-secondary">Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="row">

	<?php  foreach($caraousel as $cra) {?>
	<div class="col-md-6 col-lg-4">
		<div class="card">
		    <img class="img-fluid w-250" src="<?= base_url('assets/upload/caraousel/' . $cra['foto'])?>" alt="">
			<div class="card-body ">
				<h5 class="card-title"><?= $cra['judul']?></h5>
				<a href="<?= base_url('admin/caraousel/hapus/'.$cra['foto']);?>" type="submit" class="btn mb-1 btn-rounded btn-outline-danger mx-1"><Datag>DELETE</Datag>
				<a href="" type="submit" class="btn mb-1 btn-rounded btn-outline-success" data-toggle="modal" data-target="#edit<?=$cra['id_caraousel']?>">EDIT</a>
			</div>
		</div>
	</div>

	<div class="bootstrap-modal mb-3 ">
						<!-- Button trigger modal -->
						<!-- Modal -->
						<div class="modal fade" id="edit<?=$cra['id_caraousel']?>" style="display: none;" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title"><?= $cra['judul'];?></h5>
										<button type="button" class="close" data-dismiss="modal"><span></span>
										</button>
									</div>
									<form action="<?= base_url('admin/caraousel/edit')?>" method="post" enctype="multipart/form-data">
										<div class="modal-body">
											<input type="hidden" name="nama_foto" value="<?= $cra['foto'];?>">
											<div class="row">
												<div class="col mb-3">
													<label class="form-label">Judul</label>
													<input type="text" value="<?= $cra['judul'];?>"
														class="form-control" name="judul" required>
												</div>
											</div>
											<div class="row">
												<div class="col mb-3">
													<label class="form-label">Foto</label>
													<div class="form-group">
														<input type="file" name="foto" class="form-control"
															accept="image/png, image/jpg ,image/jpeg">
													</div>
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary"
												data-dismiss="modal">Tutup</button>
											<button type="submit" class="btn btn-primary">Simpan</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
	<?php }?>
</div>
