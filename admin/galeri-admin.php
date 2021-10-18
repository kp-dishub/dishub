<?php
    require "../database/pdo.php";
    require_once "proses-galeri.php";

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
    <link rel="stylesheet" type="text/css" href="css/informasi.css">
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
    <title>Beranda</title>
</head>
<body>
    <h5>Galeri</h5>
    <div class="row  justify-content-center my-4">
    <?php
            $inew = 0;
            foreach ($rows as $row) {
            $inew+=1;
        ?>
       
        
        <div class="card col-md-3 my-2 mx-1">
            <img src="../asset/galeri/<?=$row['namaFoto'];?>" class="card-img-top my-3" alt="...">
            <p> <?=$row['namaFoto'];?></p>
            
        </div>
   
    <?php
            }
    ?>
    
     </div>

     <div class="card my-5 mx-3">
        <h5 class="card-header text-center" style="background-color: rgb(219, 205, 205);">Tambah Foto</h5>
        <div class="card-body">  
            <p class="card-text">Tambahkan foto dengan format pdf, jpg, jpeg, atau png dengan ukuran maksimal 1 MB</p>
   
        </div>

        <form method="post" class="inner-login" action="proses-galeri.php" enctype="multipart/form-data">  
            <input class="ml-3 mb-3"type="file" name="foto"accept="*/image" > 
            <input type="hidden" value="<?php echo date("Y-m-d");?>" name="tanggal">

            <input class="btn btn-sm ml-3 mb-5" type="submit" value="Submit" name="submit">
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
<div class="footer-copyright text-center py-3">
    <a>&copy; Copyright
        <a href="#">unhas.com</a>
    </a>
    <br>Designed By Group 1</br>
</div>

</html>

</html>