<?= $this->session->flashdata('alert')?>
<div class="card">
	<div class="card-body">
		<div class="card-title">
			<h4>Saran Pengguna</h4>
		</div>
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>Tanggal</th>
						<th>Nama</th>
						<th>Email</th>
						<th>Isi</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $i=1; foreach($saran as $sr) {?>
					<tr>
						<td><?= $i++?></td>
						<td><?= $sr['tanggal'] ?></td>
						<td><?= $sr['nama'] ?></td>
						<td><?= $sr['email'] ?></td>
						<td>
							<a data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
								<span data-toggle="modal" data-target="#basicModal1<?=$sr['id_saran']?>">
									<i class="fa fa-pencil color-muted m-r-5"></i>
								</span>
							</a>
						</td>
                        <form action="<?= base_url('admin/saran/delete');?>" method="post">
						<td>
							<input type="checkbox" value="<?= $sr['id_saran'];?>" name="id[]">
						</td>
					</tr>
					<div class="bootstrap-modal mb-3 ">
						<!-- Button trigger modal -->
						<!-- Modal -->
						<div class="modal fade" id="basicModal1<?=$sr['id_saran']?>" style="display: none;"
							aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title">Tambah User</h5>
										<button type="button" class="close" data-dismiss="modal"><span>×</span>
										</button>
									</div>
									<div class="modal-body">
										<?= $sr['isi_saran'];?>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary"
											data-dismiss="modal">Tutup</button>
										<button type="submit" class="btn btn-primary">Simpan</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
				</tbody>
                <tfoot>
                    <td colspan="5"></td>
                    <td>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </td>
                </tfoot>
                </form>
			</table>
		</div>
	</div>
</div>
