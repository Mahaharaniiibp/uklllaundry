<?php 
    include "header.php";
    
?>
<center><h2 
style="margin: 50px;">Daftar yang akan di Laundry</h2></center>
<div class="row">
    <?php 
    include "koneksi.php";
    $qry_pdk=mysqli_query($conn,"select * from paket");
    while($dt_pdk=mysqli_fetch_array($qry_pdk)){
        ?>
        <div class="col-md-3"> 
            <div class="card"
            style="
            margin-bottom:50px;
            " >
              <img src="aset/foto_produk/<?=$dt_pdk['foto']?>" class="card-img-top" width="100px"height="190px">
              <div class="card-body">
                <h5 class="card-title"><?=$dt_pdk['jenis']?></h5>
                <p class="card-text"><?=substr($dt_pdk['harga'], 0,20)?></p>
                <a href="transaksi.php?id=<?=$dt_pdk['id']?>" class="btn btn-primary">Laundry Sekarang</a>
              </div>
            </div>
        </div>
        <?php
    }
    ?>

</div>
