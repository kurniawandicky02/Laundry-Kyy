<?php

include 'db.php';

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
      <link rel="shortcut icon" href="img/laun.png" sizes="16x16 32x32" type="image/png">

  <!--css Native Sendiri-->
<link rel="stylesheet" href="css/style.css">

<style>
.copyright{
  height: 60px;
  position: relative;
  top: 378px;
  margin: 30px auto;
  width: 100%;
  background-color: #333;
}
.copyright a {
  text-decoration: none;
  color: salmon;
}
.copyright a:hover {
color: red;
background-color: aqua;
}

.copyright h1 {
  padding: 8px;
  font-size: 22px;
  color: #fefefe;
  text-align: center;
}


  </style>

    <title>Harga Laundry</title>
  </head>
  <body>


    <!-- ini navbar Bosq-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid">
          <a class="navbar-brand" style="font-size: 15px; color: aqua;" href="menu.php">Home<i class="fa-solid fa-house" style="color: blue;  margin-left: 3px;"></i></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" style="color: aqua;" href="harga.php">Harga<i class="fa-solid fa-calculator" style="color: blue; margin-left: 3px;"></i></a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" style="color: aqua; href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                  Data Costumer
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="minggu.php">Data Minggu Ini</a></li>
                    <li><a class="dropdown-item" href="bulan.php">Data Bulan Ini</a></li>
                    <li><a class="dropdown-item" href="tahun.php">Data Tahun Ini</a></li>
                    </ul>
            </li>
          </ul>
        </div>
        <h2 id="go"></h2>
  
        </nav>
    <!-- Ini Akhir Navbar Bosq-->



    <?php
    $data = mysqli_query($conn, "SELECT * FROM harga");
    $row =  mysqli_fetch_array($data);

    ?>


<!--ini awal content-->
<h3><p class="text-center">Harga Kilogram</p></h3>
<div class="row">

  <div class="col-sm-4">

  </div>



  <div class="col-sm-4">
<center><input class="form-control mt4 " type="text" value="<?php echo "Rp.".$row['harga']."/KG" ?>" aria-label="readonly input example" readonly><center>
</div>

<div class="col-sm-4">

</div>

</div>

<div class="row">
  <div class="col-sm-2">

  </div>

  <div class="col-sm-8 mt-3">
  <center><a href="edit.php"><button type="button" class="btn-sm btn-info">Edit Harga</button></a></center>
  </div>

  <div class="col-sm-2">

  </div>

</div>
</div>
<div class="copyright">
        <h1>Copyright © 2022 <a href="https://wa.me/081914000203">Dicky Kurniawan</a> • Medan, Indonesia</span>
    </h1>
<!--ini akhir content bosq-->

    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    
  <script src="js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>
