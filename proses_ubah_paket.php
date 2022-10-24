<?php
if($_POST){
    $id=$_POST['id'];
    $jenis=$_POST['jenis'];
    $harga=$_POST['harga'];
    $foto=$_POST['foto'];
//    if(empty($jenis)){
//         echo "<script>alert('Nama paket tidak boleh kosong');location.href='ubah_paket.php';</script>";    
//  } elseif(empty($harga)){
//         echo "<script>alert('Deskripsi tidak boleh kosong');location.href='ubah_paket.php';</script>";
//      } elseif(empty($foto)){
//          echo "<script>alert('Harga tidak boleh kosong');location.href='ubah_paket.php';</script>";
//      } else {
        include "koneksi.php";
        $update=mysqli_query($conn,"update paket set jenis='".$jenis."',harga='".$harga."',foto='".$foto."' where id= '".$id."' ") or die(mysqli_error($conn));
        if($update){
            echo "<script>alert('Sukses update paket');location.href='paket.php';</script>";
        } else {
            echo "<script>alert('Gagal update paket');location.href='ubah_paket=".$id."';</script>";
        }
    // }
}
?>