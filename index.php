<!DOCTYPE html>
<html lang="en">

<?php include "header.php" ?>

<body>
    <!-- Responsive navbar-->

    <form action="" method="POST" >
    <div class="container-fluid bg-light position-relative">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5 mt-5">
            <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 20px;">
                <!-- <i class="flaticon-043-teddy-bear"></i> -->
                <!-- <span class="text-primary font-weight-bold">SIPEMAS</span> -->
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav font-weight-bold mx-auto py-0">
                    <select name="kategori" class="nav-item dropdown text-primary m-0" style="border: none;">
                        <option value="kec">Kecematan</option>
                        <option value="kel">Kelurahan</option>
                        <option value="rtrw">RT/RW</option>
                    </select>
                </div>
                <input type="text" name="txtsearch" class="form-control border-light" style="margin-left:20px; margin-right:10px;" placeholder="Masukkan keyword">
                <input class="btn btn-primary" type="submit" value="Search" name="submit"/>
            </div>
        </nav>
    </div>
    <!-- Courses Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">KENDARI</h5>
                <h1>Daftar Masjid & Musala</h1>
            </div>
           
            <div class="row">
            <?php
                include('config/koneksi.php'); 
                
                if (isset($_POST['submit'])) {
                    $search = $_POST['txtsearch'];
                    $kategori = $_POST['kategori'];
                    $sql = "SELECT * FROM daftar WHERE $kategori LIKE '%$search%'";
                    $result = mysqli_query($con, $sql);
                    if (mysqli_num_rows($result) == 0) {
                        echo '<div><p></p><p>Pencarian tidak ditemukan</p></div></div>';
                       } else {
                        
                        while ($daftar = mysqli_fetch_array($result)) {
                         extract($daftar);?>
                          
                        <div class="col-lg-4 col-md-6 mb-4">
                        <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="img/<?php echo $daftar['gambar']; ?>" alt="">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i><?php echo $daftar['kapasitas']; ?> Orang</small>
                                <small class="m-0"></i><?php echo "$kec, "; echo "$kel, "; echo "$rtrw" ?></small>
                            </div>
                            <a class="h5" href="detail.php?id=<?php echo $daftar['id']; ?>"><?php echo $daftar['tipe']; ?> <?php echo $daftar['nama']; ?></a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0">Luas: <small><?php echo $daftar['luas']; ?> m<sup>2</sup></small></h6>
                                    <!-- <h5 class="m-0"><small> echo $daftar['pengurus']; ?></small></h5> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                         
                <?php
                }
                }
                }

                else {
                    $batas = 3;
                    $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
                    $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	
                    $previous = $halaman - 1;
                    $next = $halaman + 1;

                    $data = mysqli_query($con,"SELECT * FROM daftar");
                    $jumlah_data = mysqli_num_rows($data);
                    $total_halaman = ceil($jumlah_data / $batas);
                    
                    $query = mysqli_query($con,"SELECT * FROM daftar LIMIT $halaman_awal, $batas");
                    while ($daftar = mysqli_fetch_array($query))
                {
                    ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="img/<?php echo $daftar['gambar']; ?>" alt="">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i><?php echo $daftar['kapasitas']; ?> Orang</small>
                                <small class="m-0"></i><?php echo $daftar['kec'];?>, <?php echo $daftar['kel'];?>, <?php echo $daftar['rtrw'];?></small>
                            </div>
                            <a class="h5" href="detail.php?id=<?php echo $daftar['id']; ?>"><?php echo $daftar['tipe']; ?> <?php echo $daftar['nama']; ?></a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0">Luas: <small><?php echo $daftar['luas']; ?> m<sup>2</sup></small></h6>
                                    <!-- <h5 class="m-0"><small> echo $daftar['pengurus']; ?></small></h5> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }; ?>
            </div>
            <div class="text-xs-center">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                    <a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$previous'"; } ?>>Previous</a>
                    </li>

                <?php 
				for($x=1;$x<=$total_halaman;$x++){
					?> 
					<li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
					<?php
				};
				?>
                 <li class="page-item">
					<a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next</a>
				</li>   
                </ul>
            </div>
            <?php }; ?>
        </div>
    </div>
    </form>
</body>

<?php include "footer.php" ?>

</html>