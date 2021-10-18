<?php
require_once "pdo.php";
session_start();

function tampilDataFeedback($pdo) {
        $sql="SELECT feedback.idNama, feedback.nama, feedback.pesan
              FROM feedback";
        $stmt = $pdo->query($sql);
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $rows;}


function tambahFoto($pdo,$namaFoto){
    $sql = "INSERT INTO galeri(namaFoto)
            VALUES (:namaFoto)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
            ':namaFoto'=>$namaFoto
    ));
}
?>