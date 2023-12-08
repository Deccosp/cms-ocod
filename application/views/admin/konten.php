<?= $this->session->flashdata('alert')?>
<div class="bootstrap-modal mb-3 ">
	<!-- Button trigger modal -->


	<button type="button" class="btn mb-4  btn-rounded btn-outline-info" data-toggle="modal" data-target="#basicModal">
		Tambah
	</button>
	<!-- Modal -->
	<div class="modal fade" id="basicModal" style="display: none;" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">

					<h5 class="modal-title">Tambah Konten</h5>
					<button type="button" class="close" data-dismiss="modal"><span>×</span>
					</button>
				</div>
				<form action="<?= base_url('admin/konten/simpan')?>" method="post" enctype="multipart/form-data">
					<div class="modal-body">
						<input type="hidden" name="username" value="<?= $user['username'];?>">
						<div class="row">
							<div class="col mb-3">
								<label class="form-label">Judul</label>
								<input type="text" class="form-control" name="judul" required>
							</div>
						</div>
						<div class="row">
							<div class="col mb-3">
								<label class="form-label">Tanggal</label>
								<input type="date" class="form-control" name="tanggal" required>
							</div>
						</div>
						<div class="row">
							<div class="col mb-3">
								<label class="form-label">Kategori</label>
								<select name="id_kategori" class="form-control">
									<?php $i=1; foreach($kategori as $ad) {?>
									<option value="<?= $ad['id_kategori'];?>"><?= $ad['nama_kategori'];?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col mb-3">
								<div class="form-group">
									<label class="form-label">Keterangan</label>
									<textarea name="keterangan" class="form-control h-150px" rows="3"
										id="textarea"></textarea>
								</div>
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
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="card">
	<div class="card-body">
		<div class="card-title">
			<h4>Data Kategori konten</h4>
		</div>
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>Tanggal</th>
						<th>Judul</th>
						<th>Kategori</th>
						<th>Username</th>
						<th>Foto</th>
						<th>Action</th>

						<?php $i=1; foreach($konten as $ac) {?>
					<tr>
						<td><?= $i++?></td>
						<td><?= $ac['tanggal'];?></td>
						<td><?= $ac['judul'];?></td>
						<td><?= $ac['nama_kategori'];?></td>
						<td><?= $ac['username'];?></td>

						<td>
							<a href="<?= base_url('assets/upload/konten/'.$ac['foto']);?>" target="_blank">
								<span class="fa-solid fa-magnifying-glass"></span> Lihat Foto
							</a>
						</td>

						<td><span>
								<a data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
									<span data-toggle="modal" data-target="#edit<?=$i?>">
										<i class="fa fa-pencil color-muted m-r-5"></i>
									</span>
								</a>
								<a href="<?= base_url('admin/konten/hapus/' .$ac['foto'])?>" data-toggle="tooltip"
									data-placement="top" title="" data-original-title="Hapus">
									<i class="fa fa-close color-danger"></i>
								</a></span>
						</td>
					</tr>
					<div class="bootstrap-modal mb-3 ">
						<!-- Button trigger modal -->
						<!-- Modal -->
						<div class="modal fade" id="edit<?=$i?>" style="display: none;" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title"><?= $ac['judul'];?></h5>
										<button type="button" class="close" data-dismiss="modal"><span></span>
										</button>
									</div>
									<form action="<?= base_url('admin/konten/edit')?>" method="post" enctype="multipart/form-data">
										<div class="modal-body">
											<input type="hidden" name="nama_foto" value="<?= $ac['foto'];?>">
											<div class="row">
												<div class="col mb-3">
													<label class="form-label">Judul</label>
													<input type="text" value="<?= $ac['judul'];?>"
														class="form-control" name="judul" required>
												</div>
											</div>
											<div class="row">
												<div class="col mb-3">
													<label class="form-label">Tanggal</label>
													<input type="date" value="<?= $ac['tanggal'];?>"
														class="form-control" name="tanggal" required>
												</div>
											</div>
											<div class="row">
												<div class="col mb-3">
													<label class="form-label">Kategori</label>
													<select name="id_kategori" class="form-control">
														<?php  foreach($kategori as $bb) {?>
														<option
															<?php if($bb['id_kategori'] == $ac['id_kategori']){ echo"selected";} ?>
															value="<?= $bb['id_kategori'];?>">
															<?= $bb['nama_kategori'];?></option>
														<?php } ?>
													</select>
												</div>
											</div>
											<div class="row">
												<div class="col mb-3">
													<div class="form-group">
														<label class="form-label">Keterangan</label>
														<textarea name="keterangan" class="form-control h-150px"
															rows="3" id="comment"><?= $ac['keterangan'];?></textarea>
													</div>
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
					<?php } ?>
					</tbody>
			</table>
		</div>
	</div>
</div>
</div>
