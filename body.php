<body>
	<!-- Navigation -->
	<nav class="navbar navbar-light bg-light">
		
		<div>
			<!--Form masuk/login akan memulai session start-->
			<form class="navbar-form navbar-right" method="POST" role="search" action="page/login.php">
					<div class="form-group">
					<input type="text" class="form-control" name="username" placeholder="Username">
					<input type="password" class="form-control" name="password" placeholder="Password">
					</div>
					<button type="submit" class="btn btn-success">Masuk</button>
			</form>
		</div>
		
		<div class="navbar-form">
			<div class="container">
				<a class="navbar-brand" href="#">Forum Diskusi</a>
			</div>
		</div>
		
	</nav>

    
			<div class="container" style="margin:8% auto;">
				<div class="col-sm-4 col-md-3">
					<h2>Ayo Diskusi</h2>
					<p>Website ini akan memfasilitasi pengguna untuk saling
					berdiskusi dan saling berbagi informasi. Selamat Menggunakan 
					layanan pada website ini, gunakan dengan bijak.</p>
				</div>
				
				 <div class="col-sm-5 col-md-4 pull-right">
                   <div class="row">
						
						<!--Form register/daftar-->
						<form method="POST" class="form-signin" action="fungsi/register.php">
								<h3 class="text-center">Silahkan Daftar</h3>
								
							<div class="form-group">
								<input type="text" name="fname"placeholder="Nama Depan" class="form-control" required>
							</div>
							
							<div class="form-group">
								<input type="text" name="lname"placeholder="Nama Belakang" class="form-control" required>
							</div>
							
							<div class="form-group">
								<select class="form-control" name="gender" required>
									<option>Gender</option>
									<!--nilai value akan memasukkan informasi ke database--> 
									<option value="Laki-Laki">Laki-Laki</option>
									<option value="Perempuan">Perempuan</option>
								</select>
							</div>
							
							<div class="form-group">
								<input type="text" placeholder="Username" name="username" class="form-control" required>
							</div>
							
							<div class="form-group">
								<input type="password" placeholder="Password" name="password" class="form-control" required>
							</div>
							
							<div class="form-group">
								<input type="submit" value="Daftar" class="btn btn-success" style="width:100%;">
							</div>
						</form>
				</div>
			</div>
		</div>