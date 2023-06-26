<?php

 mysqli_connect("localhost","root","");
 mysqli_select_db("itapurnama");

 if (isset($_POST['simpan'])) {
  //buat folder bernama gambar

  $tempdir = "gambar/"; 
        if (!file_exists($tempdir))
        mkdir($tempdir,0755); 
        //gambar akan di simpan di folder gambar
        $target_path = $tempdir . basename($_FILES['filegambar']['name']);

        //nama gambar
        $nama_gambar=$_FILES['filegambar']['name'];
        //ukuran gambar
        $ukuran_gambar = $_FILES['filegambar']['size']; 

        $fileinfo = @getimagesize($_FILES["filegambar"]["tmp_name"]);
        //lebar gambar
        $width = $fileinfo[0];
        //tinggi gambar
        $height = $fileinfo[1]; 
        // if($ukuran_gambar > 1000000){ 
        //     header("location:../backend/create.php?pesan=Ukuran Gambar Terlalu Besar! <br>");
        // }else if ($width > "480" || $height > "640") {
        //      header("location:../backend/create.php?Ukuran Harus 480 x 640! <br>");
        // }else{
            if (move_uploaded_file($_FILES['filegambar']['tmp_name'], $target_path)) {
                
                $sql=mysql_query("INSERT INTO product(judul,deskripsi,gambar) VALUES('".$_POST['judul']."','".$_POST['deskripsi']."', '".$nama_gambar."')");
               
                 header("location:../backend/index.php?pesan=Proses Sukses Dilakukan! <br>");
            } else {
                header("location:../backend/create.php?pesan=Proses Gagal Dilakukan! <br>");
            }
       // } 
 }
?>