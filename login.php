<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            <div class="mb-md-5 mt-md-4 pb-5">
              <!-- method post untuk menangkap / mengambil data -->
                <h2 align="center" class="fw-bold mb-2 text-uppercase">Jagonya Laundry</h2>
                <p align="center" class="text-white-50 mb-5">Please enter your login!</p>
                <div class="form-outline form-white mb-4">
                <form action="proses_login.php" method="post">
                  <br>
                  Username:
                  <input type="text" name="username" value="" class="form-control w-5">
                  Password:
                  <input type="password" name="password" class="form-control w-5">
                  <br>
                  Login As :
                  <select name="role" class="form-control"><br>
                    <option></option>
                    <option value="admin">Admin</option>
                    <option value="kasir">Kasir</option>
                    <option value="owner">Owner</option>
                  </select>
                  <br>
                  <br>
                  <center><input type="submit" name="login" class="btn btn-success" value="LOGIN"></center>
                  <br>
                  <br>
                  <center>
                    <p>Daftar Dulu <a href="tambah_user.php"> Sign Up</a></p>
                  </center>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</html>