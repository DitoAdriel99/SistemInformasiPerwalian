<Blockquote>
	<h5>Halaman Surat Perjanjian</h5>
	<h5 style="color: #337ab7;"><i class="fa-solid fa-user"></i> <?= $this->session->userdata('username'); ?> / <?= $this->session->userdata('nim'); ?></h5>
</Blockquote>

<a class="btn btn-primary" href="<?= base_url().'surat/'.$surat->surat ?>" target="_blank"><i class="fa-solid fa-eye"></i> Lihat Surat</a>
<blockquote></blockquote>
<div class="panel panel-primary">

	<div class="panel-heading"><strong>SURAT PERJANJIAN</strong></div>
	<div class="panel-body">
		Layanan ini disediakan bagi yang sudah diberi persetujuan dosen untuk membuat surat perjanjian <br>
		Syarat : <br>
		<ol>
			<li>Mahasiswa dengan IPK dibawah dari 2.0 dan sudah menempuh semester 4 </li>
			<li>Mahasiswa dengan pengulangan matakuliah yang lebih dari 5 akumulasi </li>
		</ol>

	</div>
	<div class="panel-footer">
		<a class="btn btn-warning" role="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Upload File</a>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">UPLOAD SURAT</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form method="post" action="<?= base_url().'Mahasiswa/Surat/upload' ?>" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Surat Perjanjian</label>
						<input type="file" class="form-control" name="surat" id="exampleInputEmail1" aria-describedby="emailHelp" required>
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
