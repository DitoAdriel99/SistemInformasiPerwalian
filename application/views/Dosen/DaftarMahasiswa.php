<Blockquote>
	<h5>Halaman Daftar Mahaiswa</h5>
	<h5 style="color: #337ab7;"><i class="fa-solid fa-user"></i> <?= $this->session->userdata('username'); ?> / <?= $this->session->userdata('nidn'); ?></h5>
</Blockquote>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 panel panel-primary">
			<div class="panel-heading">Daftar Mahasiswa Perwalian</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-condensed" id="" width="100%">
						<tbody>
							<tr class="active">
								<td class="" id="" width="3%" align="l" valign="top"><b>NO</b></td>
								<td class="" id="" width="5%" align="l" valign="top"><b>NIM</b></td>
								<td class="" id="" width="25%" align="l" valign="top"><b>Nama</b></td>
								<td class="" id="" width="5%" align="l" valign="top"><b>Angkatan</b></td>
								<td class="" id="" width="5%" align="l" valign="top"><b>Detail</b></td>
							</tr>
							<?php 
							$count = 0;
							foreach ($daftarMhs as $row) : 
								$count = $count + 1;
							?>
								
								<tr class="">
									<td class="" id="" width="3%" align="l" valign="top"><?= $count?></td>
									<td class="" id="" width="5%" align="l" valign="top"><?= $row->nim ?></td>
									<td class="" id="" width="28%" align="l" valign="top"><?= $row->username ?></td>
									<td class="" id="" width="5%" align="l" valign="top"><?= $row->angkatan ?></td>
									<td class="" id="" width="5%" align="l" valign="top">
										<a type="button" class="btn btn-primary btn-sm" href="<?= base_url() . 'Dosen/DaftarMahasiswa/detail/' . $row->nim ?>">&nbsp;<i class="fa-solid fa-eye"></i>&nbsp;</a>
										<a type="button" class="btn btn-primary btn-sm" href="<?= base_url() . 'Dosen/DaftarMahasiswa/viewDiskusi/' . $row->nim  ?>" >&nbsp;<i class="fa-solid fa-comment-dots"></i>&nbsp;</a>

									</td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>

			</div>
		</div>
	</div>
</div>
