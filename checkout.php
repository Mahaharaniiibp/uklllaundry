<?php 
    session_start();
    include "koneksi.php";
    $cart=@$_SESSION['cart'];
    if(count($cart)>0){ $status='baru';
        $pembayaran='belum dibayar';
        $lama_laundry=3; //satuan hari
        $tgl_selesai=date('Y-m-d',mktime(0,0,0,date('m'),(date('d')+$lama_laundry),date('Y')));
        
        
        foreach ($cart as $key_paket => $val_paket) {
            $query1 = mysqli_query($conn,"insert into transaksi (id_member,tgl,batas_waktu,status,pembayaran,id_user) value('".$val_paket['id_member']."','".date('Y-m-d')."','".$tgl_selesai."','".$status."','".$pembayaran."','".$val_paket['id_user']."')");
            $id=mysqli_insert_id($conn);
            $subtotal=$val_paket['qty'] * $val_paket['harga'];
            $id=mysqli_insert_id($conn);
            
            $query2 = mysqli_query($conn,"insert into detail_transaksi (id_transaksi,id_paket,qty,subtotal) value('".$id."','".$val_paket['id_paket']."','".$val_paket['qty']."','".$subtotal."')");
            $id=mysqli_insert_id($conn);   
        }
        unset($_SESSION['cart']);
        echo '<script>alert("Anda berhasil checkout");location.href="histori_transaksi.php"</script>';
    }
       
    
    ?>