
<?php 
include 'koneksi.php';
$jenis = $_POST['jenis'];
$harga= $_POST['harga'];
$ekstensi =  array('png','jpg','jpeg','gif','JPG');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if(!in_array($ext,$ekstensi) ) {
	header("location:tambah_paket.php?alert=gagal_ekstensi");
}else{ 
	if($ukuran < 1044070000){		
		$xx =$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/'.''.$filename);
		mysqli_query($conn, "INSERT INTO paket VALUES(NULL,'$jenis','$harga','$xx')");
		echo "<script>alert('Sukses menambahkan produk');location.href='paket.php';</script>";
	}else{
		echo "<script>alert('Gagal menambahkan produk');location.href='tambah_paket.php';</script>";
	}
}






?>