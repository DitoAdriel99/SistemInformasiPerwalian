<Blockquote>
	<h5>Halaman Pengumuman</h5>
	<h5 style="color: #337ab7;"><i class="fa-solid fa-user"></i> <?= $this->session->userdata('username'); ?> / <?= $this->session->userdata('nim'); ?></h5>
</Blockquote>

<div class="container-fluid">
	<div class="row">
		<?php foreach ($pengumuman as $row) : ?>
			<div class="col-md-4">
				<div class="card">
					<div class="card-header">
						<?= $row->tanggal ?>
					</div>
					<div class="card-body">
						<h5 class="card-title"><?= $row->judul ?></h5>
					</div>
					<div class="card-footer">
						<a class="btn btn-primary" href="<?= base_url() . 'Mahasiswa/Pengumuman/detailPengumuman/'.$row->id_pengumuman  ?>"><i class="fa-solid fa-eye"></i> Lihat Info</a>

					</div>
				</div>
			</div>
		<?php endforeach ?>
	</div>
</div>
