<?php 
session_start();
    if($_POST){
        $id=$_SESSION['id'];
        $nama=$_SESSION['nama'];
        $qty=$_POST['qty'];
        include "koneksi.php";

        $qry_get_paket=mysqli_query($conn,"select * from paket where id='".$_GET["id"]."'");
        $dt_paket=mysqli_fetch_array($qry_get_paket);
        $qry_get_member=mysqli_query($conn,"select * from member where nama_member='".$nama."'");
        $dt_member=mysqli_fetch_array($qry_get_member);

            $_SESSION['cart'][]=array(
                'id_member'=>$dt_member['id_member'],
                'nama'=>$dt_member['nama_member'],
                'id_paket'=>$dt_paket['id'],
                'paket'=>$dt_paket['jenis'],
                'harga'=>$dt_paket['harga'],
                'qty'=>$qty,
                'id_user' => $id
            );
        
    }
    header('location: keranjang.php');
?>