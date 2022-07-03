<Blockquote>
	<h5>Halaman Detail Pengumuman</h5>
	<h5 style="color: #337ab7;"><i class="fa-solid fa-user"></i> <?= $this->session->userdata('username'); ?> / <?= $this->session->userdata('nim'); ?></h5>
</Blockquote>

<div class="container-fluid">
	<div class="col-md-6 panel panel-primary" style="margin-left: 390px;">
		<div class="panel-heading">Pengumuman</div>
		<div class="panel-body">
			<table>
				<tr>
					<td>Judul</td>
					<td>:</td>
					<td><?= $pengumuman->judul ?></td>
				</tr>
				<tr>
					<td>Deskripsi</td>
					<td>:</td>
					<td><?= $pengumuman->deskripsi ?></td>
				</tr>
			</table>
		</div>
		<div class="panel-footer">Balasan:
			<table>
				<?php foreach($diskusi as $row) : ?>
				<tr>
					<td><?= $row->username ?></td>
					<td>:</td>
					<td><?= $row->isi ?></td>
				</tr>
				<?php endforeach ?>
			</table>

			<div class="row">
				<form method="post" action="<?= base_url() . 'Mahasiswa/Pengumuman/tambahCatatan' ?>">

					<div class="col-md-8">
						<input type="hidden" value="<?= $pengumuman->id_pengumuman ?>" name="id_pengumuman">
						<input type="hidden" value="<?= $this->session->userdata('id_user'); ?>" name="id_user">
						<input type="text" class="form-control" name="isi" required>
					</div>
					<div class="col-md-2">
						<button type="submit" class="btn btn-primary btn-sm">&nbsp;<i class="fa-solid fa-envelope-circle-check"></i>&nbsp;</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
