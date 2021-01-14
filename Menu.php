<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Kopi Kita - Menu Kopi Kita</title>

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

  <nav class="navbar navbar-expand-lg navbar-dark text-white" id="mainNav">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="Homepage.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="Menu.php">Menu Kopi Kita</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="page-section ctal">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-5">
                <span class="section-heading-upper">Menu Kopi Kita</span>
              </h2>
              <table border="1" class="table" style="color: white; border-color: white;">
                <tr>
                  <th>No</th>
                  <th>Kode Menu</th>
                  <th>Nama Menu</th>
                  <th>Harga (Rp)</th>
                  <th>Keterangan</th>
                </tr>
                <?php
                include "koneksi.php";
                $query_mysql = mysqli_query($host,"SELECT * FROM Menu")or die(mysql_error());
                $nomor = 1;
                while($data = mysqli_fetch_array($query_mysql)){
                  ?>
                  <tr>
                    <td><?php echo $nomor++; ?></td>
                    <td><?php echo $data['Kode']; ?></td>
                    <td><?php echo $data['Menu']; ?></td>
                    <td><?php echo $data['Harga']; ?></td>
                    <td><?php echo $data['Ket']; ?></td>
                  </tr>
                <?php } ?>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>

 <section class="text-white text-center py-3">
    <h4>Find Us</h4>
    <img class="mr-2" src="https://www.flaticon.com/svg/static/icons/svg/747/747562.svg" width="30px">
    <img class="mr-2" src="https://www.flaticon.com/svg/static/icons/svg/747/747543.svg" width="30px">
    <img class="mr-2" src="https://www.flaticon.com/svg/static/icons/svg/747/747483.svg" width="30px">
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