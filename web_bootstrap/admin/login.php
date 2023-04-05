<?php
    include_once 'top.php';
    include_once 'menu.php';
?>

<?php

// Memulai session
session_start();

// Cek apakah form login sudah di-submit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Simpan username dan password dari form
  $username = $_POST['email'];
  $password = $_POST['password'];

  // Lakukan pengecekan username dan password
  if ($username == 'admin@gmail.com' && $password == '123456') {
    // Jika username dan password benar, set session dan redirect ke halaman utama
    $_SESSION['email'] = $username;
    header('Location: berita.php');
    exit;
  } else {
    // Jika username atau password salah, tampilkan pesan error
    $error = 'Email atau password salah';
  }
}

?>

<div id="layoutSidenav_content">
    <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <?php if(isset($error)) : ?>
                                        <div style="color: red;"><?php echo $error;?></div>
                                    <?php endif; ?>
                                    <div class="card-body">
                                        <form method="POST">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" name="email"/>
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" placeholder="Password" name="password"/>
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html">Forgot Password?</a>
                                                <a class="btn btn-primary" type="submit" href="index.html">Login</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>

<?php
    include_once 'bottom.php';
?>
</div>
</div>
