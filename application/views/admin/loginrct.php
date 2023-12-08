<?= $this->session->flashdata('alert')?>



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
						<th>Jam</th>
						<th>Tanggal</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<?php $i=1; foreach($login_rct as $login) {?>
					<tr>
						<td><?= $i++?></td>
						<td><?= $login['username'] ?></td>
						<td><?= $login['nama'] ?></td>
						<td><?= $login['waktu'] ?></td>
						<td><?= $login['tanggal'] ?></td>
						<td>
							<?php if ($login['status'] == 'Login') : ?>
							<button class="badge badge-pill badge-success"><?= $login['status']; ?></button>
							<?php elseif ($login['status'] == 'Logout') : ?>
							<button class="badge badge-pill badge-danger"><?= $login['status']; ?></button>
							<?php else : ?>

							<?php endif; ?>
						</td>
					</tr>
					<div class="bootstrap-modal mb-3 ">
						<!-- Button trigger modal -->
						<!-- Modal -->
						<div class="modal fade" id="basicModal1<?=$login['id_user']?>" style="display: none;"
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
											<input type="hidden" name="id_user" value="<?= $login['id_user'];?>">
											<div class="row">
												<div class="col mb-3">
													<label class="form-label">Nama</label>
													<input type="text" class="form-control" value="<?=$login['nama']?>"
														name="nama" required>
												</div>
											</div>
											<div class="row">
												<div class="col mb-3">
													<label class="form-label">Level</label>
													<select name="level" class="form-control">
														<option <?php if ($login['level']=='Admin'){ echo "selected";}?>
															value="Admin">Admin</option>
														<option
															<?php if ($login['level']=='Kontributor'){ echo "selected";}?>
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
