<?php

  include ("../../config/koneksi.php");
   
    $id= $_POST['id'];
    $kec= $_POST['kec'];
    $kel= $_POST['kel'];
    $rtrw= $_POST['rtrw'];
    $tipe= $_POST['tipe'];
    $nama= $_POST['nama'];
    $alamat= $_POST['alamat'];
    $luas= $_POST['luas'];
    $kapasitas= $_POST['kapasitas'];
    $aset= $_POST['aset'];
    $lokasi= $_POST['lokasi'];
    $pengurus= $_POST['pengurus'];
    $kegiatan= $_POST['kegiatan'];
    $gambar= $_POST['gambar'];
    $fotolama= $_POST['fotolama'];

  $rand = rand();
  $ekstensi =  array('jpg','jpeg');
  $filename = $_FILES['gambar']['name'];
  $ukuran = $_FILES['gambar']['size'];
  $ext = pathinfo($filename, PATHINFO_EXTENSION);
  
  if(!in_array($ext,$ekstensi) ) {
    header("location:gagal.php?alert=gagal_ekstensi");
   }
  else{
    if ($filename){
    unlink('../../img/'.$fotolama);
    
      if($ukuran < 6048000){ 
      
      move_uploaded_file($_FILES['gambar']['tmp_name'], '../../img/'.$filename);
      mysqli_query($con, "UPDATE daftar SET kec='$kec', kel='$kel', rtrw='$rtrw', tipe='$tipe', nama='$nama', alamat='$alamat',
      luas='$luas', kapasitas='$kapasitas', aset='$aset', lokasi='$lokasi', pengurus='$pengurus', kegiatan='$kegiatan',
      gambar='$filename' WHERE id='$id'");
      header("location:dmasjid.php?alert=berhasil");
      }else{
      header("location:gagal.php?alert=gagal_ukuran");
      }
     }
  
  else {
      mysqli_query($con, "UPDATE daftar SET kec='$kec', kel='$kel', rtrw='$rtrw', tipe='$tipe', nama='$nama', alamat='$alamat',
      luas='$luas', kapasitas='$kapasitas', aset='$aset', lokasi='$lokasi', pengurus='$pengurus', kegiatan='$kegiatan'
      WHERE id='$id'");
      header("location:dmasjid.php?alert=berhasil");
  }
}
?>