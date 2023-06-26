<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Ita Purnama</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Ita Purnama</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Product Data</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Data Product</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Product
                                  <?php
                                if(isset($_GET['pesan'])){?>
                                    <div class="col-sm-12 text-center">
                                        <div class="alert alert-danger" role="alert" style="margin-top:15px;"><?php echo $_GET['message']; ?></div>
                                    </div>
                                    <?php }
                                    ?>
                            </div>
                            <div class="card-body">
                            <form  method="post" enctype="multipart/form-data">
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Judul</label>
                                <input type="text" class="form-control" name="judul" placeholder="Judul" required>
                                
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi"></textarea>
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Gambar</label>
                                <input type="file" class="form-control" name="gambar" id="exampleCheck1">
                              </div>
                              <button type="submit" name="simpan" class="btn btn-primary">Submit</button>
                              <a href="index.php" class="btn btn-secondary">Batal</a>
                            </form>
                           

                                            <?php

                                            $db = mysqli_connect("localhost","root","","itapurnama"); // Koneksi ke database

                                            if (isset($_POST['simpan'])) { //Seandainya tombol unggah di klik

                                             $gambar = $_FILES['gambar']['tmp_name']; //Mengambil file gambar di input type="file" name="gambar"

                                             $tempattinggal = $_FILES['gambar']['name']; //Mengambil tempat tinggal/url gambar di input type="file" name="gambar"

                                             $folder = "gambar/";

                                              $judul = $_POST['judul'];
                                            $deskripsi = $_POST['deskripsi'];

                                             $pindah = move_uploaded_file($gambar, $folder.$tempattinggal); //Memindahkan gambar ke file gambar/ yang telah dibangun tadi

                                             if ($pindah) { //Seandainya gambar berhasil dipindah

                                              mysqli_query($db, "INSERT INTO product VALUES('','$judul','$deskripsi','$tempattinggal')"); //Masukan tempat tinggal gambar ke database

                                              header("location:../backend/index.php?pesan=Proses Sukses Dilakukan! <br>");

                                             }

                                             else{//Seandainya gambar gagal dipindah

                                              echo "<div>Gambar gagal diunggah</div>"; //Tampilkan peringatan

                                             }



                                            }

                                            ?>


                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Ita Purnama Dewi</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
