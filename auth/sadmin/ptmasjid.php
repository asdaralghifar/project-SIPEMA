<?php

  include ("../../config/koneksi.php");

  $rand = rand();
  $ekstensi =  array('jpg','jpeg');
  $filename = $_FILES['gambar']['name'];
  $ukuran = $_FILES['gambar']['size'];
  $ext = pathinfo($filename, PATHINFO_EXTENSION);

  if(!in_array($ext,$ekstensi) ) {
    header("location:gagal.php?alert=gagal_ekstensi");
   }else{
    if($ukuran < 6048000){ 
    move_uploaded_file($_FILES['gambar']['tmp_name'], '../../img/'.$filename);
    mysqli_query($con, "INSERT INTO daftar VALUES (NULL,'$_POST[kec]', '$_POST[kel]','$_POST[rtrw]', '$_POST[tipe]', 
    '$_POST[nama]','$_POST[alamat]', '$_POST[luas]', '$_POST[kapasitas]', '$_POST[aset]','$_POST[lokasi]', '$_POST[pengurus]',
    '$_POST[kegiatan]', '$filename')");
    header("location:dmasjid.php?alert=berhasil");
    }else{
    header("location:gagal.php?alert=gagal_ukuran");
    }
   }
?>