<?php 
    include "header.php";
?>
<center><h2 
style="margin: 50px;">Daftar Paket Laundry</h2></center>
<div class="row">
    <?php 
    include "koneksi.php";
    $qry_pdk=mysqli_query($conn,"select * from paket");
    while($dt_pdk=mysqli_fetch_array($qry_pdk)){

    
      $hapus="<a href='hapus_paket.php?id=$dt_pdk[id]' onclick='return confirm(Apakah anda yakin menghapus Histori ini?)' class='btn btn-danger'>hapus paket</a>";
        ?>
        <div class="col-md-3">
       
            <div style="
            margin-bottom:50px;
            "
            
            class="card" >
              <img src="aset/foto_produk/<?=$dt_pdk['foto']?>" class="card-img-top" width="100px"height="190px">
              <div class="card-body">
                <h5 class="card-title"><?=$dt_pdk['jenis']?></h5>
                <p class="card-text"><?=substr($dt_pdk['harga'], 0,20)?></p>
        
                <a href="ubah_paket.php?id=<?=$dt_pdk['id']?>" class="btn btn-primary">Ubah Paket</a>
                <td><?=$hapus?></td>
                
              </div>
            </div>
            
        </div>
        
        <?php
        
    }
    
    ?>
    
   
 
    
</div>

<a href="tambah_paket.php" class="btn btn-primary">Tambah Paket</a>
