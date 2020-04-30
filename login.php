<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./assets/mais.css">



</head>

<body>

  <section class="login-block">
    <div class="container container-login">
      <div class="row">
        <div class="col-md-4 login-sec">
          <h2 class="text-center">Login Now</h2>
          <form class="login-form" action="./user/login.php" method="POST">

            <?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
                    }
            ?>


            <div class="form-group">
              <label for="exampleInputEmail1" class="text-uppercase">Username</label>
              <input type="text" class="form-control" name="username" placeholder="" required>

            </div>
            <div class="form-group">
              <label for="exampleInputPassword1" class="text-uppercase">Password</label>
              <input type="password" class="form-control" name="password" placeholder="" required>
            </div>


            <div class=" form-check">
              <div class="btn btn-link btn-signup">Create Compte</div>
              <button type="submit" class="btn btn-login float-right">Submit</button>
            </div>

          </form>
          <form class="signup-form hidden" action="./user/signup.php" method="POST">
            <div class="form-group">
              <label for="exampleInputEmail1" class="text-uppercase">Username</label>
              <input type="text" class="form-control" name="username" placeholder="" required>

            </div>
            <div class="form-group">
              <label for="exampleInputPassword1" class="text-uppercase">Password</label>
              <input type="password" class="form-control" name="password" placeholder="" required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1" class="text-uppercase">Confirm</label>
              <input type="password" class="form-control" name="confirmpassword" placeholder="" required>
            </div>


            <div class=" form-check">
              <button class="btn btn-link login-btn">I have account</button>
              <button type="submit" class="btn btn-login float-right">Submit</button>
            </div>

          </form>
          <div class="copy-text">Created with <i class="fa fa-heart"></i> by <a href="http://grafreez.com">kttss</a>
          </div>
        </div>
        <div class="col-md-8 banner-sec">

        </div>
      </div>
  </section>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="./assets/main.js"></script>
</body>

</html>

<?php
    unset($_SESSION["error"]);
?>