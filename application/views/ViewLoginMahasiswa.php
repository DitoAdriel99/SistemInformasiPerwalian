<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		body {
			font-family: Arial, Helvetica, sans-serif;

		}

		form {
			border: 3px solid #f1f1f1;
		}

		input[type=text],
		input[type=password] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			box-sizing: border-box;
		}

		button {
			background-color: #04AA6D;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			cursor: pointer;
			width: 100%;
		}

		button:hover {
			opacity: 0.8;
		}

		.cancelbtn {
			width: auto;
			padding: 10px 18px;
			background-color: #f44336;
		}

		.imgcontainer {
			text-align: center;
			margin: 24px 0 12px 0;
		}

		img.avatar {
			width: 40%;
			border-radius: 50%;
		}

		.container {
			padding: 16px;
		}

		span.psw {
			float: right;
			padding-top: 16px;
		}

		/* Change styles for span and cancel button on extra small screens */
		@media screen and (max-width: 300px) {
			span.psw {
				display: block;
				float: none;
			}

			.cancelbtn {
				width: 100%;
			}
		}
	</style>
</head>

<body>

	<h1>SSAT</h1>

	<?php echo form_open(base_url() . 'loginMahasiswa/proses_login') ?>
	<!-- <div class="imgcontainer">
			<img src="img_avatar2.png" alt="Avatar" class="avatar">
		</div> -->
	<form role="form">

		<div class="container">
			<label for="nim"><b>NIM</b></label>
			<input type="text" placeholder="Enter Username" name="nim" required>

			<label for="psw"><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="password" required>
			<?php if (isset($pesan)) {
				echo $pesan;
			}	?>
			<button >Login</button>
		</div>

	</form>

	<?= form_close() ?>

</body>

</html>
