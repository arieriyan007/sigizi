<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - SI Gizi</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login Aplikasi</h3></div>
                                    <div class="card-body">

                                    <!-- notifikasi -->
                                    <?php 
                                    if (isset($_GET['status'])) {
                                        if ($_GET['status']=="logout") {
                                            echo "<div class='alert alert-info text-center' role='alert'><b>Anda Telah Logout</b></div>";
                                        } if ($_GET['status']=="gagal") {
                                            echo "<div class='alert alert-danger text-center'>Maaf! Username & Password Salah!</div>";
                                        } if ($_GET['status']=="belumlogin") {
                                            echo "<div class='alert alert-danger text-center'><b>Anda belum melakukan Login</b></div>";
                                        }
                                    }
                                    ?>
                                    <!-- akhir notifikasi -->

                                        <form method="post" action="loginAksi.php">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="name" id="inputName" type="text" placeholder="Masukkan Username" />
                                                <label for="inputName">Username</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="password" id="inputPassword" type="password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
    
                                                <button class="btn btn-primary btn-sm" name="submit" type="submit">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small">Support by IT RSMP</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; www.marinapermatahospital.com</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Team &amp; IT RSMP</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
