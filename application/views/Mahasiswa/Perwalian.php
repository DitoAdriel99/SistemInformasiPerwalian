<Blockquote>
	<h5>Halaman Perwalian</h5>
	<h5 style="color: #337ab7;"><i class="fa-solid fa-user"></i> <?= $this->session->userdata('username'); ?> / <?= $this->session->userdata('nim'); ?></h5>
</Blockquote>

<div class="container-fluid">
	<div class="row">
	<div class="col-md-4 panel panel-primary">
			<div class="panel-heading">INFO DOSEN WALI</div>
			<div class="panel-body"><img src="<?= base_url() . 'test.jpg' ?>" width="140" height="193" border="1" alt="" class="img-thumbnail"><br><br>
				<div class="table-responsive">
					<table class="table table-condensed" id="" width="100%">
						<tbody>
							<tr>
								<td class="" id="" width="40%" align="l" valign="top">NIDN</td>
								<td class="" id="" width="2%" align="center" valign="top">:</td>
								<td class="" id="" width="40%" align="l" valign="top">&nbsp;<?= $dosen->nidn ?>&nbsp;</td>
							</tr>
							<tr>
								<td class="" id="" width="40%" align="l" valign="top">Nama Dosen</td>
								<td class="" id="" width="2%" align="center" valign="top">:</td>
								<td class="" id="" width="40%" align="l" valign="top">&nbsp;<?= $dosen->username ?>&nbsp;</td>
							</tr>
							<tr>
								<td class="" id="" width="40%" align="l" valign="top">Email</td>
								<td class="" id="" width="2%" align="center" valign="top">:</td>
								<td class="" id="" width="40%" align="l" valign="top">&nbsp;<?= $dosen->email ?>&nbsp;</td>
							</tr>

						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
