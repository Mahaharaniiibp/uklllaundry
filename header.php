<?php
session_start();
if (($_SESSION['status_login']) == false) {
    header('Location: login.php');
}

?>
<!DOCTYPE html>
<html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title></title>
</head>


<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: 4px 4px 5px -4px;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"> <img src="logo-no-background.png" width="30" height="30" 
      style="margin-right:30px;
      margin-left:30px" alt=""> Jagonya Laundry</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">

        <!-- home kasir -->

        <?php
          
          if ($_SESSION['role'] != 'admin'){
          
            if ($_SESSION['role'] != 'owner'){
              ?>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home_kasir.php">Home</a>
          </li>
          <?php
          }}
          ?>

<!-- home admin owner -->

<?php
          if ($_SESSION['role'] != 'kasir'){
          
           
              ?>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
          </li>
          <?php
          }
          ?>

          <!-- tambah_member - kasir -->
          <?php
          if ($_SESSION['role'] != 'admin'){
            if ($_SESSION['role'] != 'owner'){
              ?>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="tambah_member.php"></a>
          </li>
          <?php
          }}
          ?>

<!-- tampil member  - kasir -->
<?php
          
            if ($_SESSION['role'] != 'owner'){
              ?>

          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="tampil_member.php">Data Member</a>
          </li>
          <?php
          }
          ?>

          <!-- tambah paket  - kasir -->

          <?php
          if ($_SESSION['role'] != 'admin'){
            if ($_SESSION['role'] != 'owner'){
              ?>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="data.php">Data Paket</a>
          </li>   
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="keranjang.php">Keranjang</a>
          </li>   
          <?php
          }}
          ?>
         
<!-- tampil paket  - admin -->

<?php
          if ($_SESSION['role'] != 'kasir'){
            if ($_SESSION['role'] != 'owner'){
              ?>
<li class="nav-item">
            <a class="nav-link" aria-current="page" href="paket.php">Data Paket</a>
          </li>
          <?php
          }}
          ?>
<!-- tambah user -->

<?php
          if ($_SESSION['role'] != 'kasir'){
            if ($_SESSION['role'] != 'owner'){
              ?>
<li class="nav-item">
            <a class="nav-link" aria-current="page" href="tambah_user.php">Data User</a>
          </li>
          <?php
          }}
          ?>
         

          <!-- histori pembelian  - all -->

         

          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="histori_transaksi.php">Histori</a>
          </li>

          <!-- log out -->

          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container bg-light rounded" style="margin-top:10px">