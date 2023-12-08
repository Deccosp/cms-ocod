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
				<form action="<?= base_url('admin/kategori/simpan')?>" method="post">
					<div class="modal-header">
						<h5 class="modal-title">Tambah Konten</h5>
						<button type="button" class="close" data-dismiss="modal"><span></span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col mb-3">
								<label class="form-label">Nama</label>
								<input type="text" class="form-control" placeholder="Nama" name="nama_kategori"
									required>
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
			<h4>Data Kategori </h4>
		</div>
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Kategori</th>
						<th>Aksi</th>

						<?php $i=1; foreach($kategori as $ab) {?>
					<tr>
						<td><?= $i++?></td>
						<td><?= $ab['nama_kategori'];?></td>
						<td><span>
								<a data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
									<span data-toggle="modal" data-target="#edit<?=$ab['id_kategori']?>">
										<i class="fa fa-pencil color-muted m-r-5"></i>
									</span>
								</a>
								<a href="<?= base_url('admin/kategori/hapus/' .$ab['id_kategori'])?>"
									data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus">
									<i class="fa fa-close color-danger"></i>
								</a></span>
						</td>
					</tr>
					<div class="bootstrap-modal mb-3 ">
						<!-- Button trigger modal -->
						<!-- Modal -->
						<div class="modal fade" id="edit<?=$ab['id_kategori']?>" style="display: none;"
							aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title">Tambah kategori</h5>
										<button type="button" class="close" data-dismiss="modal"><span></span>
										</button>
									</div>
									<form action="<?= base_url('admin/kategori/edit')?>" method="post">
										<div class="modal-body">
											<input type="hidden" name="id_kategori" value="<?= $ab['id_kategori'];?>">
											<div class="col mb-3">
												<label class="form-label">Nama</label>
												<input type="text" class="form-control" placeholder="Nama"
													name="nama_kategori" value="<?= $ab['nama_kategori'];?>" required>
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
