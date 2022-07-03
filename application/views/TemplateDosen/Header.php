<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/a4ecd35059.js" crossorigin="anonymous"></script>
	<title>STARMIK</title>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">STARMIK</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="<?= base_url().'Dosen/HalamanUtama' ?>"><i class="fa-solid fa-house"></i> Home</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<i class="fa-solid fa-person-chalkboard"></i>Perwalian
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
							<li><a class="dropdown-item" href="<?= base_url(). 'Dosen/DaftarMahasiswa' ?>">Daftar Mahasiswa Perwalian</a></li>
							<li><a class="dropdown-item" href="<?= base_url(). 'Dosen/PengumumanMahasiswa' ?>">Pengumuman</a></li>
						</ul>
					</li>
				</ul>
				<ul class="navbar-nav right">
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="<?= base_url() . 'LoginDosen/Logout' ?>"><?= $this->session->userdata('nidn') ?></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container-fluid">
		<br>
