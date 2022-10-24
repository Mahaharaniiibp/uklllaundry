
<?php 
    include "header.php";
?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head><style>
    body h3{
        margin-top:50px;
       
    }
    
    body form {
padding: 5% 30%;
background-image: url(pict-1.jpg);
border-radius: 10px;
margin-top: 100px;
    }
    .button{
        margin-top: 30px;
        padding: 5px 10%;
        color: brown;
        border-radius: 8px; 
        border-style: none;
        font-weight:500;
        font-size: 30px;
        margin-bottom: 10px;

}
.button:hover{
    background-color:burlywood;
    color: white;
}
form {
    font-size: 20px;
    font-weight: 500;
  padding: 10px 2px;
    padding-top: 10px;
    color: black;
}
    .foto{
        margin-top: 10px;
        background-color: whitesmoke;
        border-radius: 8px;
    }
    input[type="file"]{
        background-color: burlywood;
    }
</style>

<body>
    <?php
    include "koneksi.php";
    $qry_get_plg = mysqli_query($conn, "select * from member ");
    $dt_plg = mysqli_fetch_array($qry_get_plg);
    
    ?>
    <center><h2 class="mt-5">Ubah Member</h2></center>
    <form action="proses_ubah_member.php" method="post" style="margin-top: -20px;">
        <input type="hidden" name="id" value="<?= $dt_plg['id_member'] ?>">
        Nama Member:
        <input type="text" name="nama" value="<?= $dt_plg['nama_member'] ?>" class="form-control">
        Alamat :
        <textarea name="alamat" class="form-control" rows="4"><?= $dt_plg['alamat'] ?></textarea>
        Jenis Kelamin : 
            <select name="jenis_kelamin" class="form-control"><br>
            <option></option>

            <option value="Laki-laki"<?= ($dt_plg["jenis_kelamin"] == "Laki-laki")? "selected" : "" ?>>Laki-laki</option>

            <option value="Perempuan"<?= ($dt_plg["jenis_kelamin"] == "Perempuan")? "selected" : "" ?>>Perempuan</option>
            </select> 
        No telp :
        <input type="number" name="tlp" value="<?= $dt_plg['tlp'] ?>" class="form-control">

       <br>
        <input type="submit" name="simpan" value="Ubah member" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>