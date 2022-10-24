<?php 
    include "header.php";
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<style>
    body{
/* padding: 5% 30%; */
background-image: url(pict-1.jpg);
    }
    .button{
        margin-top: 30px;
        padding: 10px 44%;
        color: black;
        border-radius: 8px;
        background-color: gainsboro;  
        border-style: none;
        font-weight:500;
        font-size: 30px;
        
}
.button:hover{
    background-color:burlywood;
    color: white;
}
form {
    font-size: 20px;
    font-weight: 500;
    color: black;
    padding-top: 10px;
}
    

</style>
<body>
      <center><h3>Daftar</h3></center>
    <form action="proses_tambah_user.php" method="post">
        Nama :
        <input type="text" name="nama" value="" class="form-control">
        Username : 
        <input type="text" name="username" value="" class="form-control">
        Password : 
        <input type="password" name="password" value="" class="form-control">
        Role : 
            <select name="role" class="form-control"><br>
            <option></option>
            <option value="admin">Admin</option>
            <option value="kasir">Kasir</option>
            <option value="owner">Owner</option>
        
      
       <center> <input  class="button" type="submit" name="simpan" value="submit" class="btn btn-primary"></center>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>