<?php 
    include "header.php";
    include "koneksi.php";
    $qry_detail_pdk=mysqli_query($conn,"select * from paket where id = '".$_GET['id']."'");
    $dt_pdk=mysqli_fetch_array($qry_detail_pdk);
?>
<h2>Transaksi Laundry</h2>
<br>
<div class="row">
    <div class="col-md-4">
    <img src="aset/foto_produk/<?=$dt_pdk['foto']?>" class="card-img-top" width="100px"height="190px">
    <div class="col-md-8">
        <form action="masukankeranjang.php?id=<?=$dt_pdk['id']?>" method="post">
            <table class="table table-hover table-striped">
                <thead>
                <tr>
                        <td
                        ><a
                         href="tampil_paket.php" class="btn btn-primary">kembali</a></td>
                    </tr>
                    <tr>
                        <td>Jenis Paket</td><td><?=$dt_pdk['jenis']?></td>
                    </tr>
                            <tr>
                        <td>Harga</td><td><?=$dt_pdk['harga']?></td>
                            </tr>
                    <tr>
                        <td>Jumlah </td><td><input type="number" name="qty" value="1"></td>               
                    </tr>
                    <tr>
                        <td colspan="2"><input class="btn btn-success" type="submit" value="Tambah"></td>
                    </tr>
                    
                </thead>
            </table>
        </form>
    </div>
</div>