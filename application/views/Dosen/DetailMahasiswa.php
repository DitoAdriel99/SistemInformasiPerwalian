<Blockquote>
	<h5>Halaman Detail Mahaiswa</h5>
	<h5 style="color: #337ab7;"><i class="fa-solid fa-user"></i> <?= $this->session->userdata('username'); ?> / <?= $this->session->userdata('nidn'); ?></h5>
</Blockquote>


<div class="container-fluid">
	<div class="row">
		<div class="col-md-3 panel panel-primary">
			<div class="panel-heading">INFORMASI AKADEMIK</div>
			<div class="panel-body"><img src="<?= base_url() . 'test.jpg' ?>" width="140" height="193" border="1" alt="" class="img-thumbnail"><br><br>
				<div class="table-responsive">
					<table class="table table-condensed" id="" width="100%">
						<tbody>
							<tr>
								<td class="" id="" width="40%" align="l" valign="top">NIM</td>
								<td class="" id="" width="2%" align="center" valign="top">:</td>
								<td class="" id="" width="40%" align="l" valign="top">&nbsp;<?= $mahasiswa->nim ?>&nbsp;</td>
							</tr>
							<tr>
								<td class="" id="" width="40%" align="l" valign="top">Nama Mahasiswa</td>
								<td class="" id="" width="2%" align="center" valign="top">:</td>
								<td class="" id="" width="40%" align="l" valign="top">&nbsp;<?= $mahasiswa->username ?>&nbsp;</td>
							</tr>
							<tr>
								<td class="" id="" width="40%" align="l" valign="top">Angkatan</td>
								<td class="" id="" width="2%" align="center" valign="top">:</td>
								<td class="" id="" width="40%" align="l" valign="top">&nbsp;<?= $mahasiswa->angkatan ?>&nbsp;</td>
							</tr>
							<tr>
								<td class="" id="" width="40%" align="l" valign="top">IP Kumulatif</td>
								<td class="" id="" width="2%" align="center" valign="top">:</td>
								<td class="" id="" width="40%" align="l" valign="top">&nbsp;<?= $mahasiswa->ipk ?>&nbsp;</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="col-md-6 panel panel-primary">
			<div class="panel-heading"><b>KRS</b></div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-condensed" id="" width="100%">
						<tbody>
							<tr class="active">
								<td class="" id="" width="3%" align="l" valign="top"><b>NO</b></td>
								<td class="" id="" width="5%" align="l" valign="top"><b>KODE</b></td>
								<td class="" id="" width="25%" align="l" valign="top"><b>MATAKULIAH</b></td>
								<td class="" id="" width="5%" align="l" valign="top"><b><small>PRESENSI(sebelum uts)</small></b></td>
								<td class="" id="" width="8%" align="l" valign="top"><b><small>EVALUASI</small></b></td>
							</tr>
							<?php foreach ($matakuliah as $row) : ?>
								<tr class="">
									<td class="" id="" width="3%" align="l" valign="top">1</td>
									<td class="" id="" width="5%" align="l" valign="top"><?= $row->kode_mk ?></td>
									<td class="" id="" width="5%" align="l" valign="top"><?= $row->nama_mk ?></td>
									<td class="" id="" width="5%" align="l" valign="top"><?= $row->absensi ?></td>
									<td class="" id="" width="5%" align="l" valign="top">
										<?php if ($row->absensi < 4) { ?>
											<span class="badge bg-danger">Danger</span>
										<?php } elseif ($row->absensi == 4) { ?>
											<span class="badge bg-warning text-dark">Warning</span>
										<?php } elseif ($row->absensi > 4) { ?>
											<span class="badge bg-success">Success</span>
										<?php } ?>

									</td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="col-md-3 panel panel-primary">
			<div class="panel-heading">Surat Perjanjian</div>
			<?php if ($cekSurat < 1) { ?>
				Mahasiswa TIdak ada mengupload surat perjanjian.

				<div class="panel-body">
				</div>
			<?php } else { ?>
				Surat perjanjian mahasiswa dapat dilihat dengan menekan tombol dibawah.
				<div class="panel-body">
					<a class="btn btn-primary" href="<?= base_url() . 'surat/' . $surat->surat ?>" target="_blank"><i class="fa-solid fa-eye"></i> Lihat Surat</a>
				</div>
			<?php } ?>
		</div>
	</div>
</div>
