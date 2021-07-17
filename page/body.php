<body>
	<!-- Navigation -->
	<nav class="navbar navbar-light bg-light">
		
		<div class="navbar-form">
			<div class="container">
				<a class="navbar-brand" href="beranda.php">Forum Diskusi</a>

                <ul class="nav navbar-nav navbar-left">
                    <li><a href="#quest">Ajukan Pertanyaan</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <!--Panggil nama akun hasil index dari tabel username-->
                    <li><a href="#" ><span class="glyphicon glyphicon-user"></span><?php echo $username;?> </a></li>
                    
                    <!--Klik logout untuk keluar session-->
                    <li ><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
                </ul>		       
			</div> 
		</div>
	</nav>

    <div class="container" style="margin:7% auto;">
        <h4>Diskusi Terakhir</h4>
        <hr>

        <?php 
            //hubungkan ke koneksi databases
            include "../fungsi/koneksi.php";

            //menampilkan isi tabel category (adanya join dua tabel dalam menampilkan data)
            $kategori = mysqli_query($koneksi,"SELECT * FROM category");
            while ($row=mysqli_fetch_assoc($kategori)) {
                extract($row);
                echo '<div class="panel panel-success">
                        <div class="panel-heading">
                        <h3 class="panel-title">'.$category.'</h3>
                        </div>

                        <div class="panel-body">
                            <table class="table table-stripped">
                            <tr>
                                <th>Judul Topik</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>';
                            
                            //munculkan data dengan menampilkan gabungan antara isi tblpost 
                            //dengan "foreign key" yang berasal dari primary key tabel category (digabungkan),
                            //jadi antara tabel category dan tblpost ada
                            $kategorii =mysqli_query($koneksi,"SELECT * FROM tblpost WHERE cat_id='$cat_id' ");
                            while ($roww=mysqli_fetch_assoc($kategorii)) {
                                extract($roww);
                                echo '<tr>';
                                echo '<td>'.$title.'</td>';
                                //////////////////////$content
                                echo '<td>'.$category.'</td>';
                                echo '<td> <a href="komen.php?posting_Id='.$post_Id.'"> <button class="btn btn-success"> Lihat </button> </td>';
                                echo '</tr>';
                            } 

                echo        '<table>
                        </div>
                    </div>';
            }
        ?>

       <div class="my-quest" id="quest">
            <div>
               <form method="POST" action="fungsi-addposting.php">
                    <label>Kategori</label>
                        <select name="category" class="form-control">
                            <option> </option>
                            <?php 
                            
                                $kategori = mysqli_query($koneksi, "SELECT * FROM category");
                                
                                if ($kategori==true) {
                                    while ($row=mysqli_fetch_assoc($kategori)) {
                                        extract($row);
                                        echo '<option value='.$cat_id.'>'.$category.'</option>';
                                    }
                                }
                            ?>
                        </select>
                        <label>Judul Topik</label>
                        <input type="text" class="form-control" name="title" required>

                        <label>Konten</label>
                        <textarea name="content" class="form-control">
                        </textarea>
                        <br>
                        
                        <input type="hidden" name="userid" value=<?php echo $userid; ?>>

                        <input type="submit" class="btn btn-success pull-right" value="Kirim">
               </form><br>
            <hr>
              <a href="" class="pull-right">Tutup</a>
            </div>
       </div>

    </div>