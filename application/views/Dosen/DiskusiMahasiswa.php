<style>
	.container {
		border: 2px solid #dedede;
		background-color: #f1f1f1;
		border-radius: 5px;
		padding: 10px;
		margin: 10px 0;
	}

	.darker {
		border-color: #ccc;
		background-color: #ddd;
	}

	.container::after {
		content: "";
		clear: both;
		display: table;
	}

	.container img {
		float: left;
		max-width: 60px;
		width: 100%;
		margin-right: 20px;
		border-radius: 50%;
	}

	.container img.right {
		float: right;
		margin-left: 20px;
		margin-right: 0;
	}

	.time-right {
		float: right;
		color: #aaa;
	}

	.time-left {
		float: left;
		color: #999;
	}
</style>
<Blockquote>
	<h5>Halaman Diskusi Mahaiswa</h5>
	<h5 style="color: #337ab7;"><i class="fa-solid fa-user"></i> <?= $this->session->userdata('username'); ?> / <?= $this->session->userdata('nidn'); ?></h5>
</Blockquote>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 panel panel-primary">
			<div class="panel-heading">BOX Diskusi</div>
			<div class="panel-body" style="height: 600px;">
				<?php foreach ($diskusi as $row) : ?>
					<div class="container">
						<img src="<?= base_url() . 'test.jpg' ?>" alt="Avatar" style="width:100%;">
						<p><?= $row->pengirim ?></p>
						<p><?= $row->isi ?></p>
						<span class="time-right"><?= $row->tanggal ?></span>
					</div>
				<?php endforeach ?>
			</div>
			<div class="panel-footer">
				<form method="post" action="<?= base_url() . 'Dosen/DaftarMahasiswa/tambahDiskusi' ?>">
					<input type="hidden" name="nim" value="<?= $mahasiswa->nim ?>">
					<div class="row">
						<div class="col-md-10">
							<input type="text" class="form-control" id="exampleInputEmail1" name="isi">
						</div>
						<div class="col-md-2">
							<button type="submit" class="btn btn-primary btn-sm">&nbsp;<i class="fa-solid fa-envelope-circle-check"></i>&nbsp;</button>
						</div>
					</div>

					<div id="emailHelp" class="form-text">Silahkan Masukan Pesan Yang Ingin di Sampaikan</div>

				</form>
			</div>
		</div>
	</div>
</div>
