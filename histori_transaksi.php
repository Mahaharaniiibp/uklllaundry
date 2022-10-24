<?php 
    include "header.php";
?>
<br></br>
  <div class="container">
    <div class="card">
      <div class="card-header">
        <h2 align = "center">HISTORI TRANSAKSI</h2>
        <form method="POST" action="histori_transaksi.php" class="d-flex">
        </form>  
      </div>
      <div class="card-body">
        <table class="table">
    <thead>
        <tr>
        <th scope="col">No</th>
        <th scope="col">Kasir</th>
        <th scope="col">Member</th>
        <th scope="col">Jenis Paket</th>
        <th scope="col">qty</th>
        <th scope="col">Subtotal</th>
        <th scope="col">Tanggal laundry</th>
        <th scope="col">Tanggal selesai</th>
        <th scope="col">Tanggal bayar</th>
        <th scope="col">Status</th>
        <th scope="col">Pembayaran</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        include "koneksi.php";
        $qry_histori=mysqli_query($conn,"select * from transaksi join member on transaksi.id_member = member.id_member join user on transaksi.id_user = user.id_user order by transaksi.id_transaksi desc");
        $no=0;
        while($dt_histori=mysqli_fetch_array($qry_histori)){
            $no++;
            //menampilkan paket laundry yang dipilih
            $paket="<ol>";
            $subtotal="<ol>";
            $qty="<ol>";
            $qry_paket=mysqli_query($conn,"select * from  detail_transaksi join paket on paket.id=detail_transaksi.id_paket where detail_transaksi.id_transaksi = '".$dt_histori['id_transaksi']."'");
            while($dt_paket=mysqli_fetch_array($qry_paket)){
                $paket.=$dt_paket['jenis'].
                "<br>";
                $subtotal.=$dt_paket['subtotal']."<br>";
                $qty.=$dt_paket['qty']."<br>";
            }
            $paket.="</ol>";
            $subtotal.="</ol>";
            $qty.="</ol>";
            //menampilkan status    
            $qry_cek_bayar=mysqli_query($conn,"select * from transaksi where transaksi.id_transaksi = '".$dt_histori['id_transaksi']."'");
            if(mysqli_num_rows($qry_cek_bayar)>0){
                $dt_bayar=mysqli_fetch_array($qry_cek_bayar);
                
                $status="<label class='alert alert-success'>".$dt_histori['status']."</label>";
                $button_update="<a href='update_transaksi.php?id=".$dt_histori['id_transaksi']."' class='btn btn-warning'>Update</a>";
                
            } else {
                
            }
        ?>
            <tr>
                <td><?=$no?></td>
                <td><?=$dt_histori['nama']?></td>
                <td><?=$dt_histori['nama_member']?></td>
                <td><?=$paket?></td>
                <td><?=$qty?></td>
                <td><?=$subtotal?></td>
                <td><?=$dt_histori['tgl']?></td>
                <td><?=$dt_histori['batas_waktu']?></td>
                <td><?=$dt_histori['tgl_bayar']?></td>
                <td>
                <?php
                    if($dt_histori['status'] == 'baru'){
                        echo '<div class="alert alert-danger" role="alert">baru</div>';
                    } elseif($dt_histori['status'] == 'proses') {
                        echo '<div class="alert alert-primary" role="alert">proses</div>';
                    }elseif($dt_histori['status'] == 'selesai') {
                        echo '<div class="alert alert-warning" role="alert">selesai</div>';
                    }elseif($dt_histori['status'] == 'diambil') {
                        echo '<div class="alert alert-success" role="alert">diambil</div>';
                    }
                    ?>  
                </td>
                <td>
                    <?php
                    if($dt_histori['tgl_bayar'] == '0000-00-00'){
                        echo '<div class="alert alert-danger" role="alert">Belum Dibayar</div>';
                    } else {
                        echo '<div class="alert alert-success" role="alert">Dibayar</div>';
                    }
                    ?>    
                </td>
                <td><?=$button_update?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<?php 
    include "footer.php";
?>
</body>
</html>