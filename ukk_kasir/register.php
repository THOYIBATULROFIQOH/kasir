<!DOCTYPE html>
<html>
<head>
	<title>UKK KASIR</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="content">
			<div class="card mt-5">
				<div class="row">
					<div class="col-6">
						<div class="card-body">
						<p class="text-center h1 fw-bold mb-4 mx-1 mx-md-3 mt-3">Sign up</p>
							<?php 
							if(isset($_GET['pesan'])){
								if($_GET['pesan']=="gagal"){
									echo "<div class='alert alert-danger'>Mohon Isi Terlebih Dahulu!</div>";
								}
							}
							?>
							<form method="post" action="proses_daftar.php">
								<div class="form-group">
									<label>Nama Lengkap</label>
									<input type="text" class="form-control" name="nama_petugas" required="yes">
								</div>
                                <div class="form-group">
									<label>Username</label>
									<input type="text" class="form-control" name="username" required="yes">
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="password" class="form-control" name="password" required="yes">
								</div>
								<div class="form-group mt-4">
									<button class="btn btn-outline-primary form-control" type="submit">Register</button>
								</div>
							</form>
								<div class="links" align="center"><br>
                                Already a account <a href="index.php">Sign In</a>
                				</div>
						</div>
					</div>
					<div class="col-6">
						<div class="card-body">
							<img src="assets/register.png" width="500">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>