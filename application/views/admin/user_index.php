<?= $this->session->flashdata('alert')?>
<div class="bootstrap-modal mb-3 ">
	<!-- Button trigger modal -->

	<button type="button" class="btn mb-2 btn-rounded btn-outline-info" data-toggle="modal"
		data-target="#basicModal">
        Tambah
    </button>
	<!-- Modal -->
	<div class="modal fade" id="basicModal" style="display: none;" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<form action="<?= base_url('admin/user/simpan')?>" method="post">
					<div class="modal-header">
						<h5 class="modal-title">Tambah User</h5>
						<button type="button" class="close" data-dismiss="modal"><span>×</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col mb-3">
								<label class="form-label">Nama</label>
								<input type="text" class="form-control" placeholder="Nama" name="nama" required>
							</div>
						</div>
						<div class="row">
							<div class="col mb-3">
								<label class="form-label">Username</label>
								<input type="text" class="form-control" placeholder="Username" name="username" required>
							</div>
						</div>
						<div class="row">
							<div class="col mb-3">
								<label class="form-label">Password</label>
								<input type="password" class="form-control" placeholder="Password" name="password"
									required>
							</div>
						</div>
						<div class="row">
							<div class="col mb-3">
								<label class="form-label">Level</label>
								<select name="level" class="form-control">
									<option value="Admin">Admin</option>
									<option value="Kontributor">Kontributor</option>
								</select>
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
			<h4>Data Pengguna</h4>
		</div>
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>Username</th>
						<th>Nama</th>
						<th>Level</th>
						<th>Aksi</th> 
					</tr> 
				</thead> 
				<tbody>
							<?php $i=1; foreach($user as $aa) {?>
					<tr>
						<td><?= $i++?></td>
						<td><?= $aa['username'] ?></td>
						<td><?= $aa['nama'] ?></td>
						<td><?= $aa['level'] ?></td>
						<td>
							<span>
								<a data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
									<span data-toggle="modal" data-target="#basicModal1<?=$aa['id_user']?>">
										<i class="fa fa-pencil color-muted m-r-5"></i>
									</span>
								</a>
								<a href="<?= base_url('admin/user/hapus/' .$aa['id_user'])?>" data-toggle="tooltip"
									data-placement="top" title="" data-original-title="Hapus">
									<i class="fa fa-close color-danger"></i>
								</a>
							</span>
						</td>
					</tr>
					<div class="bootstrap-modal mb-3 ">
						<!-- Button trigger modal -->
						<!-- Modal -->
						<div class="modal fade" id="basicModal1<?=$aa['id_user']?>" style="display: none;"
							aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title">Tambah User</h5>
										<button type="button" class="close" data-dismiss="modal"><span>×</span>
										</button>
									</div>
									<form action="<?= base_url('admin/user/edit')?>" method="post">
										<div class="modal-body">
											<input type="hidden" name="id_user" value="<?= $aa['id_user'];?>">
											<div class="row">
												<div class="col mb-3">
													<label class="form-label">Nama</label>
													<input type="text" class="form-control" value="<?=$aa['nama']?>"
														name="nama" required>
												</div>
											</div>
											<div class="row">
												<div class="col mb-3">
													<label class="form-label">Level</label>
													<select name="level" class="form-control">
														<option <?php if ($aa['level']=='Admin'){ echo "selected";}?>
															value="Admin">Admin</option>
														<option
															<?php if ($aa['level']=='Kontributor'){ echo "selected";}?>
															value="Kontributor">Kontributor</option>
													</select>
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
