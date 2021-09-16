<!DOCTYPE html>
<html ng-app="myApp" lang="en" dir="ltr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Main CSS-->
  <link rel="stylesheet" href="/assets/css/styles.css">
  <!-- Title Page-->
  <title>Welcome !</title>
  <!-- AngularJS Code-->
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
  <script src="/controllers/app.js"></script>
  <!-- Favicon,Font,FontAwesome Code-->
  <link rel="icon" href="faviconn.ico">
  <script src="https://kit.fontawesome.com/35e38b559c.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">

</head>

<body>
  <div class="page-wrapper p-t-130 p-b-100">
    <div class="wrapper wrapper--w680">
      <div class="card card-4">
        <div class="card-body">


          <table cellspacing="0">
            <tbody>
              <tr>
                <td class="form-title">
                  <h3> <strong> Fill the form. Let's talk!</strong></h3>
                  <hr class="form-title">
                </td>

                <td>
                  <img class="imageclass" src="/img/img-man.jpeg">
                </td>
              </tr>
            </tbody>
          </table>




          <br>

          <?php if (session()->get('success')): ?>
          <div class="alert alert-success" role="alert">
            <?= session()->get('success') ?>
          </div>
          <?php endif; ?>
          <div class="angularcode" ng-controller="myController" ng-submit="submitForm()">
        <form class="" action="/" method="post">
            <div class="form-group row row-space">
              <div class="input-group">
                <label class="label" for="username">Username</label>
                <input class="input--style-4" type="text" placeholder="Enter your username" ng-model="username"
                  name="username" id="username" required value="<?= set_value('username') ?>">
              </div>
            </div>
            <div class="form-group row row-space">
              <div class="input-group">
                <label class="label" for="password">Password</label>
                <input class="input--style-4" type="password" name="password" id="password" placeholder="Enter Password"
                  ng-model="password" value="">
              </div>
            </div>
            <?php if (isset($validation)): ?>
            <div class="col-12">
              <div class="alert alert-danger" role="alert">
                <?= $validation->listErrors() ?>
              </div>
            </div>
            <?php endif; ?>
            <div class="row">
              <div class="p-t-15">
                <button class="btn btn--radius-2 btn--blue" type="submit" id="submit-button"
                  name="submit">Login&nbsp&nbsp <i class="fas fa-arrow-right"></i></button>
              </div>


            </div>
            </form>
          </div>
          <br>
          <p id="pid">Don't have an account yet?
            <a href="/register">Register with us!</a>
          </p>
          <p id="pid">By creating an account you agree to our <a href="#">Terms & Privacy</a>.
          </p>
        </div>
      </div>
    </div>
  </div>













  <!-- Footer -->
  <footer id="footer">
    <div class="container-fluid">
      <p>© Copyright 2021 Oseno</p>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>



</body>

</html>