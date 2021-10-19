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
   <!-- Required meta tags -->
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap first, then CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="admin.css">
     <!-- Google Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!-- Title -->
</head>
<body class="bg-dark">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">ADMIN</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item ">
        <a class="nav-link" href="feedback-admin.php">Feedback</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="galeri-admin.php">Galeri<span class="sr-only">(current)</span></a>
      </li>
  
    </ul>
  </div>
</nav>
    <h5 class="h3 text-center p-3 text-light">Galeri</h5>
    <div class="row  justify-content-center my-4">
    <?php
            $inew = 0;
            foreach ($rows as $row) {
            $inew+=1;
        ?>
       
        
        <div class="card col-md-3 my-2 mx-1">
            <img src="../asset/galeri/<?=$row['namaFoto'];?>" class="card-img-top my-3" alt="...">
            
        </div>
   
    <?php
            }
    ?>
    
     </div>

     <div class="card my-5 mx-5">
        <h5 class="card-header text-center text-light">Tambah Foto</h5>
        <div class="card-body">  
            <p class="card-text">Tambahkan foto dengan format pdf, jpg, jpeg, atau png dengan ukuran maksimal 1 MB</p>

        </div>

        <form method="post" class="inner-login" action="proses-galeri.php" enctype="multipart/form-data">  
            <input class="ml-3 mb-3"type="file" name="foto"accept="*/image" > 
            <input type="hidden" value="<?php echo date("Y-m-d");?>" name="tanggal">
            <div class="col-10 h3"> <input class="btn btn-sm ml-3 mb-5" type="submit" value="Submit" name="submit"></div>
           
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>


</html>

</html>