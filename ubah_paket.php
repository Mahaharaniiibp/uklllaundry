
<?php 
    include "header.php";
?>
<!DOCTYPE html>
<html>
<head>
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"crossorigin="anonymous">
    <title>Ubah</title>
</head>
<body>
    <?php
    include "koneksi.php";
    $qry_get_siswa=mysqli_query($conn,"select * from paket where id = '".$_GET['id']."'");
    $dt_siswa=mysqli_fetch_array($qry_get_siswa);
    ?>
    <center><h3>Ubah Paket</h3></center>
    <form action="proses_ubah_paket.php" method="post">
        <input type="hidden" name="id" value= "<?=$dt_siswa['id']?>">
        Jenis Laundry : 
            <select name="jenis" class="form-control"><br>
            <option></option>
            
            <option value="kiloan" <?= ($dt_siswa["jenis"] == "kiloan")? "selected" : "" ?>>Kiloan</option>

            <option value="selimut" <?= ($dt_siswa["jenis"] == "selimut")? "selected" : "" ?>>Selimut</option>

            <option value="bed_cover" <?= ($dt_siswa["jenis"] == "bed_cover")? "selected" : "" ?>>Bed Cover</option>

            <option value="kaos" <?= ($dt_siswa["jenis"] == "kaos")? "selected" : "" ?>>Kaos</option>
            </select>    
        Harga : 
        <input type="number" name="harga" value="<?=$dt_siswa['harga']?>" class="form-control">
        Foto : 
        <input type="file" name="foto" value="<?=$dt_siswa['foto']?>" class="form-control">
       <center> <input style="background-color: brown;
       margin-top:100px;
       border:none;
       padding:10px 100px;
       border-radius:8px" type="submit" name="simpan" value="Ubah Paket" class="btn btn-primary"></center>
    </form>
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"crossorigin="anonymous"></script>
</body>
</html>