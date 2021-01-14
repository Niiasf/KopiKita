<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Kopi Kita - Homepage</title>

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <?php 
  session_start();
  if($_SESSION['status']!="login"){
    header("location:index.php?pesan=belum_login");
  }
  ?>

  <div class="container mt-5 text-white">
    <a class="logout mr-3" href="logout.php" style="color: white; background-color: #e6a756; padding: 10px;">Log Out</a>
    <span>Welcome to Ruang Kopi Kita, </span><span class="text-primary"><?php echo $_SESSION['Email']; ?></span>
  </div>

  <h1 class="site-heading text-center text-white d-none d-block">
    <img src="img/logo1.png" class="logo">
    <span class="site-heading-upper text-primary mt-3">KOPI KITA</span>
    <span class="site-heading-lower">"Ketika kopimu &amp; kopiku, bertemu di ruang Kopi Kita"</span>
  </h1>

      <section class="contact">
    <div class="contact-heading">
      <h2>Komentar Masuk</h2>
    </div>
    <div class="contact-body">
      <div class="container">
        <div class="row">
          <table border="1" class="table" style="color: white; border-color: white;">
                <tr>
                  <th>No</th>
                  <th>Tanggal</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Komentar</th>
                </tr>
                <?php
                include "koneksi.php";
                $query_mysql = mysqli_query($host,"SELECT * FROM Komentar")or die(mysql_error());
                $nomor = 1;
                while($data = mysqli_fetch_array($query_mysql)){
                  ?>
                  <tr>
                    <td><?php echo $nomor++; ?></td>
                    <td><?php echo $data['Tanggal']; ?></td>
                    <td><?php echo $data['Name']; ?></td>
                    <td><?php echo $data['Email']; ?></td>
                    <td><?php echo $data['Komentar']; ?></td>
                  </tr>
                <?php } ?>
              </table>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer text-faded text-center py-4">
    <div class="container">
      <p class="m-0 small">Copyright &copy; Kania Safitri 2020</p>
    </div>
  </footer>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>