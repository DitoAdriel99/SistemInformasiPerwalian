<Blockquote>
	<h5>Halaman Pengumuman</h5>
	<h5 style="color: #337ab7;"><i class="fa-solid fa-user"></i> <?= $this->session->userdata('username'); ?> / <?= $this->session->userdata('nidn'); ?></h5>
</Blockquote>
<div class="container-fluid">
	<a type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">&nbsp;<i class="fa-solid fa-bullhorn"></i>&nbsp; Tambah Pengumuman</a>
	<blockquote></blockquote>
	<div class="row">
		<?php
		$count = 0;
		foreach ($pengumuman as $row) :
			$count = $count + 1;
		?>
			<div class="col-md-4">
				<div class="card">
					<div class="card-header">
						<?= $row->tanggal ?>
					</div>
					<div class="card-body">
						<h5 class="card-title"><?= $row->judul ?></h5>
						<p class="card-text"><?= $row->deskripsi ?></p>
					</div>
					<div class="card-footer">
						<a class="btn btn-primary" href="<?= base_url() . 'Dosen/PengumumanMahasiswa/detailPengumuman/' . $row->id_pengumuman  ?>"><i class="fa-solid fa-eye"></i> Lihat Info</a>

					</div>
				</div>
			</div>
		<?php endforeach ?>
	</div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Pengumuman</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form method="post" action="<?= base_url() . 'Dosen/PengumumanMahasiswa/tambahPengumuman' ?>">
				<div class="modal-body">
					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Judul Pengumuman</label>
						<input type="text" class="form-control" name="judul" placeholder="Masukan Judul Pengumuman" required>
					</div>
					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Deskripsi</label>
						<textarea type="text" class="form-control" name="deskripsi" placeholder="Masukan Deskripsi Pengumuman" required>

						</textarea>
						<label class="form-check-label" for="exampleCheck1">Masukan Deskripsi</label>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</div>
			</form>
		</div>
	</div>
</div>
