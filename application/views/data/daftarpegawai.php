<div id="main-content">
	<div class="page-heading">
		<div class="page-title">
			<div class="row">
				<div class="col-12 col-md-6 order-md-1 order-last">
					<h3>Daftar Pegawai</h3>
				</div>
				<div class="col-12 col-md-6 order-md-2"></div>
			</div>
		</div>
		<section class="section">
			<div class="card">
				<div class="card-header">
					<a href="" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-2" data-toggle="modal" data-target="#newPegawaiModal"><i class="fas fa-plus fa-sm" data-toggle="modal" data-target="#newPegawaiModal"></i> Tambah Pegawai Baru</a>

				</div>
				<div class="card-body">
					<table class="table table-hover" id="dataTable">
						<thead>
							<tr>
								<th scope="col">No</th>
								<th scope="col">Nama</th>
								<th scope="col">Jabatan</th>
								<th scope="col">Status Pegawai</th>
							</tr>

						</thead>
						<tbody>
							<?php $i = 1; ?>
							<?php foreach ($id as $id) : ?>

								<tr>
									<th scope="row">
										<center><?= $i; ?>
									</th>
									<td><?= $id['nama']; ?></td>
									<td><?= $id['jabatan']; ?></td>
									<td><?= $id['status_pegawai']; ?></td>
								</tr>
								<?php $i++; ?>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</section>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="newPegawaiModal" tabindex="-1" aria-labelledby="newPegawaiModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="newPegawaiModalLabel">Tambah Pegawai Baru</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?= base_url('data/tambahPegawai'); ?>" method="post" id="formD" name="formD">
					<div class="modal-body">
						<div class="form-group">
							<label>Nama :</label>
							<input type="text" class="form-control" id="nama" name="nama">
						</div>
						<div class="form-group">
							<label>Jabatan :</label>
							<input type="text" class="form-control" id="jabatan" name="jabatan">
						</div>
						<div class="form-group">
							<label>Status Pegawai :</label>
							<input type="text" class="form-control" id="status_pegawai" name="status_pegawai">
						</div>

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-primary">Tambah</button>
					</div>

					</script>
				</form>
			</div>
		</div>
	</div>
