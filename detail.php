<!DOCTYPE html>
<html lang="en">
<?php include "header.php";
include('config/koneksi.php');  ?>
<body>
    
    <!-- Detail Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <div class="mb-5">
                    <?php $id = $_GET['id'];
                        $sql = "SELECT * FROM daftar ORDER BY id=$id";
                            $query = mysqli_query($con, $sql);                                  
                            while($daftar = mysqli_fetch_array($query)){
                                            $nama= $daftar['nama'];
                                            $tipe= $daftar['tipe'];
                                            $kec= $daftar['kec'];
                                            $kel= $daftar['kel'];
                                            $rtrw= $daftar['rtrw'];
                                            $alamat= $daftar['alamat'];
                                            $luas= $daftar['luas'];
                                            $kapasitas= $daftar['kapasitas'];
                                            $aset= $daftar['aset'];
                                            $lokasi= $daftar['lokasi'];
                                            $pengurus= $daftar['pengurus'];
                                            $kegiatan= $daftar['kegiatan'];
                                            $gambar=$daftar['gambar'];
                                          }?>
                        <!-- <h6 class="text-primary mb-3">Jan 01, 2050</h6> -->
                        <h1 class="mb-5"><?php echo $tipe; ?> <?php echo $nama; ?></h1>                 
                        <img class="img-fluid rounded w-100 mb-4" src="img/<?php echo $gambar; ?>" alt="Image">
                        <h4 class="mb-5">Keterangan <?php echo $tipe; ?> <?php echo $nama; ?></h4>                 
                        <p>Alamat: <?php echo "$alamat, "; echo "$kec, "; echo "$kel, "; echo $rtrw ; ?></p>
                        <p>Luas: <?php echo $luas; ?> m<sup>2</sup></p>
                        <p>Kapasitas: <?php echo $kapasitas; ?> Orang</p>
                        <p>Aset: <?php echo $aset; ?></p>
                        <p>Lokasi: <a href="<?php echo $lokasi; ?>" target="_blank">Link Maps</a></p>
                        <p>Pengurus: <?php echo $pengurus; ?></p>
                        <p>Kegiatan: <?php echo $kegiatan; ?></p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Detail End -->
</body>
<?php include "footer.php"?>
</html>