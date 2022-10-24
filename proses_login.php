<?php 
    if($_POST){
        $username=$_POST['username'];
        $password= md5($_POST['password']);
        $role=$_POST['role'];
        if(empty($username)){
            echo "<script>alert('Username tidak boleh kosong');location.href='login.php';</script>";
        } elseif(empty($password)){
            echo "<script>alert('Password tidak boleh kosong');location.href='login.php';</script>";
        } else {
            include "koneksi.php";
            $qry_login=mysqli_query($conn,"SELECT * FROM `user` WHERE nama = '$username' AND password = '$password' AND role = '$role'");
            if($qry_login){
                $dt_login=mysqli_fetch_array($qry_login);
                session_start();
                

                if($dt_login['role']== "owner"){
                    $_SESSION['id']=$dt_login['id_user'];
                    $_SESSION['nama']=$dt_login['nama'];
                    $_SESSION['role']= "owner";
                    $_SESSION['status_login']=true;
                    header("location: home.php");

                }else if($dt_login['role'] == "admin"){
                    $_SESSION['id']=$dt_login['id_user'];
                    $_SESSION['nama']=$dt_login['nama'];
                    $_SESSION['role']= "admin";
                    $_SESSION['status_login']=true;
                    header("location: home.php");

                }else if($dt_login['role'] == "kasir"){
                    $_SESSION['id']=$dt_login['id_user'];
                    $_SESSION['nama']=$dt_login['nama'];
                    $_SESSION['role']= "kasir";
                    $_SESSION['status_login']=true;
                    header("location: home_kasir.php");
                }
            } else {
                echo "Gagal Login";
                header("location: login.php");
            }
        }
    }
?>