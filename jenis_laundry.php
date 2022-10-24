<?php 
    include "header.php";
?>
<h2>Daftar Jenis Laundry</h2>
<div class="row">
    <?php 
    include "koneksi.php";
    $qry_buku=mysqli_query($conn,"select * from jenis laundry");
    while($dt_buku=mysqli_fetch_array($qry_buku)){
        ?>
        <div class="col-md-3">
            <div class="card mt-3" >

              <img src="aset/foto_produk/<?=$dt_buku['foto']?>" width="180px" height="260px">

              <div class="card-body">
                <h5 class="card-title"><?=$dt_buku['nama_paket']?></h5>
                <p class="card-text"><?=substr($dt_buku['deskripsi'], 0,30)?></p>
                <a href="pinjam_buku.php?id_buku=<?=$dt_buku['id_buku']?>" class="btn btn-primary">Pinjam</a>
              </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
<div>
    <br>
    <a href="tambah_jenis.php" class="btn btn-primary">Tambah Buku</a>
</div>
<?php 
    include "footer.php";
?>

