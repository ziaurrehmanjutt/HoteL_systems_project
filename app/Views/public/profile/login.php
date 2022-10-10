<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">



    <div class="card-header text-center">
      <img width="100%" height="100px" src="<?= base_url('assets/theme/user') . '/' . SITE_DATA_LOGIN_LOGO ?>">
    </div>
    <div class="card-body">
      <p class="login-box-msg">Welcome! Sign into Your Account</p>
      <form action="" method="post">
        <div class="input-group mb-3">
          <input name="email" value="<?= isset($cookie['email']) ? $cookie['email'] : "" ?>" type="email" required class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" value="<?= isset($cookie['password']) ? $cookie['password'] : "" ?>" required name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>


        <?php if ($error) : ?>
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <?= $error ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <?php endif ?>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input name="remember_me" <?= isset($cookie['remember_me']) ? "checked" : "" ?> type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button name="login" type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>



      </form>

      <!-- <div class="social-auth-links text-center mt-2 mb-3">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> -->
      <!-- /.social-auth-links -->

      <div class="row">
        <div class="col-sm-6">
          <p class="mb-1">
            <a href="#">I forgot my password</a>
          </p>
        </div>

        <div class="col-sm-6">
          <div class="dropdown show">
            <a class="btn dropdown-toggle" style="float: right;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              English
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <?php foreach ($languages as $key => $value) {
                print "<a class=\"dropdown-item\" href=\"".base_url('lang/change/').$value['short_name'].">Arabic</a>";
              } ?>
            </div>
          </div>
        </div>

      </div>

      <p class="mb-0">


        <!-- <a href="register.html" class="text-center">Register a new membership</a> -->
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>