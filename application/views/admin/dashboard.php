<div class="row">
	<div class="col-lg-3 col-sm-6">
		<div class="card gradient-1">
			<div class="card-body">
				<h3 class="card-title text-white">Konten</h3>
				<div class="d-inline-block">
					<h2 class="text-white"><?= $konten; ?></h2>
					<!-- <p class="text-white mb-0">Jan - March 2019</p> -->
				</div>
				<span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-sm-6">
		<div class="card gradient-2">
			<div class="card-body">
				<h3 class="card-title text-white">Galeri</h3>
				<div class="d-inline-block">
					<h2 class="text-white"><?= $galeri; ?></h2>
					<!-- <p class="text-white mb-0">Jan - March 2019</p> -->
				</div>
				<span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-sm-6">
		<div class="card gradient-3">
			<div class="card-body">
				<h3 class="card-title text-white">Saran</h3>
				<div class="d-inline-block">
					<h2 class="text-white"><?= $saran; ?></h2>
					<!-- <p class="text-white mb-0">Jan - March 2019</p> -->
				</div>
				<span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-sm-6">
		<div class="card gradient-4">
			<div class="card-body">
				<h3 class="card-title text-white">User</h3>
				<div class="d-inline-block">
					<h2 class="text-white"><?= $usere; ?></h2>
					<!-- <p class="text-white mb-0">Jan - March 2019</p> -->
				</div>
				<span class="float-right display-5 opacity-5"><i class="fa fa-heart"></i></span>
			</div>
		</div>
	</div>
</div>
<div class="card-body">
	<h4 class="card-title">Kategori Konten</h4>
	<div class="table-responsive">
		<table class="table header-border table-hover verticle-middle">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Nama</th>
					<th scope="col">Jumlah</th>
				</tr>
			</thead>
			<tbody>
            <?php $no = 1; foreach ($jumlah_konten as  $value) : ?>
				<tr>
					<th><?= $no++; ?></th>
					<td><?= $value->nama_kategori; ?></td>
					<td><span class="label gradient-1 btn-rounded"><?= $value->jumlah_konten; ?></span>
					</td>
				</tr>
                <?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>
