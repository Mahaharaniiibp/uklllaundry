<?php
if($_POST){
    $id=$_POST['id'];
    $status=$_POST['status'];
    $pembayaran= $_POST['pembayaran'];
    $tgl_bayar=date('Y-m-d');
    
    if(empty($status)){
        echo "<script>alert('status tidak boleh kosong');location.href='update_transaksi.php?id=".$id."';</script>";
    } elseif(empty($pembayaran)){
        echo "<script>alert('pembayaran tidak boleh kosong');location.href='update_transaksi.php?id=".$id."';</script>";
    }else {
        include "koneksi.php";

            $update=mysqli_query($conn,"update transaksi set status='".$status."', pembayaran='".$pembayaran."', tgl_bayar='".$tgl_bayar."' where id_transaksi = '".$id."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update transaksi');location.href='histori_transaksi.php';</script>";
            } else {
                echo "<script>alert('Gagal update transaksi');location.href='update_transaksi.php?id=".$id."';</script>";
            }
        }
}

?>
