<?php
require "../database/proses-sql.php";


if (isset($_POST['submit']) && isset($_POST['tanggal'])) {
    
    if ( isset($_FILES['foto'])) {

        $namaFile = $_FILES['foto']['name'];
        $tmp = $_FILES['foto']['tmp_name'];
        $ukuranFile=$_FILES['foto']['size'];
        $valid_extensions = array('jpeg','jpg','png','pdf');

        $ext=explode('.',$namaFile);//pecah nama file dan ekstensi
        $namaFileBaru=$ext[0];
        $extfix=strtolower(end($ext));

        $rand = rand(1,5000);
        $namaFileTersimpan = $_POST['tanggal']."_".$namaFileBaru.".".$extfix;

        //cek file belum diupload
        if ($_FILES['foto']['error'] == 4){ 
            echo  "<script> alert('Silahkan masukkan file anda dulu');
                  window.location='galeri-admin.php' </script>"; 
        }
        //cek jika ekstensi file tidak sesuai 
        else if (!in_array($extfix, $valid_extensions)){
            echo  "<script> alert('Silahkan masukkan file dengan ekstensi jpeg, jpg, png, pdf');
                  window.location='galeri-admin.php' </script>"; 
        }
        //cek jika ukuran file lebih besar
        else if($ukuranFile > 1048576){ //1 MB = 1048576 Byte
            echo  "<script> alert('Silahkan masukkan file dengan ukuran < 1 MB');
            window.location='galeri-admin.php' </script>"; 

        }
        //pindahkan file 
        else if (move_uploaded_file($tmp, '../asset/galeri/' . $namaFileTersimpan)){
            tambahFoto($pdo,$namaFileTersimpan);
            echo  "<script> alert('File berhasil ditambahkan');
                  window.location='galeri-admin.php' </script>"; 
           
        }
        else{
            echo  "<script> alert('File gagal ditambahkan');
                   </script>"; 
        }
    }
    
}
?>