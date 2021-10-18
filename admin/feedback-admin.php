<?php
require_once "../database/pdo.php";
require "../database/proses-sql.php";
$rows=tampilDataFeedback($pdo);

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap first, then CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/admin.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!-- Title -->
    <title>Feedback</title>
  </head>
  
  <body class="bg-dark">

    
    <h1 class="text-center mt-5" style="color: white">Feedback</h1>
    <div class="container mt-5">
    
<h4>
  
    <table class="table table-light table-hover mr-5">
    <thead class="thead-light">
        <tr>
        <th scope="col">No.</th>
        <th scope="col">Nama</th>
        <th scope="col">Pesan</th>
        </tr>
      
      </thead>
    
      <tbody>
        <?php
            $inew = 0;
            foreach ($rows as $row) {
            $inew+=1;
        ?>
          
        <tr>
          <td> <?= $inew; ?>.</th>
          <td><?= $row['nama'];?></td>
          <td><?= $row['pesan'];?></td>
        

        </tr>
  <?php
  
        }?>
  </tbody>
  </table>
  
</body>
</html>