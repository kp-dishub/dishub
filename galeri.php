<?php
    require "database/pdo.php";


    function tampilFoto($pdo) {
        $sql="SELECT galeri.idFoto, galeri.namaFoto
              FROM galeri";
        $stmt = $pdo->query($sql);
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
      }

    $rows=tampilFoto($pdo);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1.0, minimum-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/galeri.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2F33n5dQ81WUE00s/" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <style>
        html,body{
            overflow-x: hidden;
        }
        </style>
    <title>Galeri</title>
</head>

<body>

    <nav class="navbar navbar-custom  fixed-top navbar-expand-lg">
        <div class="container">
            <img src="asset/dishub.png" width="8%" height="20%">
            <h5 class="h5">Dinas Perhubungan</h4>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Beranda</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="profil.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Profil
                        </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="profil.html#tugas-fungsi">Tugas dan Fungsi</a>
                                <a class="dropdown-item" href="profil.html#visi-misi">Visi dan Misi</a>

                                <a class="dropdown-item" href="profil.html#tujuan-saran">Tujuan dan Sasaran</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="kelembagaan.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Kelembagaan
                        </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="kelembagaan.html#sekretariat">Sekretariat</a>
                                <a class="dropdown-item" href="kelembagaan.html#pkp">Bidang Pengembangan Keselamatan dan Penindakan</a>
                                <a class="dropdown-item" href="kelembagaan.html#sarana">Bidang Sarana dan Prasarana</a>

                                <a class="dropdown-item" href="kelembagaan.html#transpor">Bidang Moda Transportasi</a>
                                <a class="dropdown-item" href="kelembagaan.html#lalin">Bidang Lalu Lintas</a>

                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="informasi.php">Informasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="galeri.php">Galeri</a>
                        </li>

                    </ul>
                </div>
        </div>
    </nav>
    <body class="mt-5">
    <h5 class="h3 text-center" style="padding-top:10%">Galeri</h5>
    <div class="row  justify-content-center my-4">
    <?php
            $inew = 0;
            foreach ($rows as $row) {
            $inew+=1;
        ?>
       
        
        <div class="card col-md-3 my-2 mx-1">
            <img src="asset/galeri/<?=$row['namaFoto'];?>" class="my-3" alt="...">
            
        </div>
   
    <?php
            }
    ?>
    
     </div>
     </body>
        <div class="footer-copyright text-center py-3 fix-bottom">
        <a>&copy; Copyright
            Teknik Informatika Unhas 2018</a>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://kit.fontawesome.com/d8d292993e.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>