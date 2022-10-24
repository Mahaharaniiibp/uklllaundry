<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS ONLY -->
  <link href="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
<?php 
    include "header.php";
?>
<br></br>
  <div class="container">
    <div class="card">
      <div class="card-header">
        <h1>KERANJANG</h1>
        <form method="POST" action="keranjang.php" class="d-flex">   
        </form>  
      </div>
      <div class="card-body">
        <table class="table">
    <thead>
        <tr>
            <th scope="col">NO</th>
            <th scope="col">Nama Member</th>
            <th scope="col">Paket</th>
            <th scope="col">Qty</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (@$_SESSION['cart']):
        foreach (@$_SESSION['cart'] as $key_paket => $val_paket): ?>
            <tr>
                <td><?=($key_paket+1)?></td>
                <td><?=$val_paket['nama']?></td>
                <td><?=$val_paket['paket']?></td>
                <td><?=$val_paket['qty']?></td> 
                <td><a href="hapus_cart.php?id=<?=$key_paket?>" class="btn btn-danger"><strong>X</strong></a></td>
            </tr>
            </tbody>
        <?php
            endforeach;
            echo $_SESSION['id'];
        ?>
        <tr>
          <td>
              <a href='checkout.php?id_user=<?= $_SESSION["id"]?>' class='btn btn-primary'>CheckOut</a>
              <a href='tampil_paket.php' class='btn btn-primary'>Tambah</a>
          </td>
        </tr>
      
        <?php
          else:
        ?>

        <tr>
          <td colspan='5'><p style='text-align:center'>Tidak Ada Paket di Keranjang</p></td>
        </tr>

        <?php
          endif;
        ?>
        
   
</table>


<?php 
    include "footer.php";

?>