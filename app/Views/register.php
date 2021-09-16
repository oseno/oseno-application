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


    <main>
        <div class="page-wrapper p-t-130 p-b-100">
            <div class="wrapper wrapper--w680">
                <div class="card card-4">


                    <div class="card-body">

                        <table cellspacing="0">
                            <tbody>
                                <tr>
                                    <td class="form-title">
                                        <h3> <strong> Fill the form. It's easy!</strong></h3>
                                        <hr class="form-title">
                                    </td>

                                    <td>
                                        <img class="imageclass" src="/img/img-man.jpeg">
                                    </td>
                                </tr>
                            </tbody>
                        </table>



                        <br>
                        <div class="angularcode" ng-controller="myController" ng-submit="submitForm()">
        <form class="" action="/register" method="post">

                            <div class="row row-space">
                                <div class="col-6">
                                    <div class="input-group">
                                        <label class="label" for="fname">First Name</label>
                                        <input class="input--style-4" type="text" ng-model="fname"
                                            placeholder="Enter your first name" name="fname" id="fname" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group">
                                        <label class="label" for="mname">Middle Name</label>
                                        <input class="input--style-4" type="text" ng-model="mname"
                                            placeholder="Enter your middle name" name="mname" id="mname" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-group">
                                        <label class="label" for="lname">Last Name</label>
                                        <input class="input--style-4" type="text" ng-model="lname"
                                            placeholder="Enter your last name" name="lname" id="lname" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row row-space">
                                <div class="col-6">
                                    <div class="input-group">
                                        <label class="label" for="dob">Date of Birth</label>
                                        <input class="input--style-4" type="date" ng-model="dob"
                                            placeholder="Enter your birthday" name="dob" id="dob" required></p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group">
                                        <label class="label">Gender</label>
                                        <div class="p-t-10">
                                            <label class="radio-container m-r-45">Male&nbsp&nbsp
                                                <input type="radio" checked="checked" ng-model="gender" name="gender"
                                                    value="male">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-container">Female&nbsp
                                                <input type="radio" ng-model="gender" name="gender" value="female">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-container">Non- Binary &nbsp
                                                <input type="radio" ng-model="gender" name="gender" value="non-binary">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-container">None
                                                <input type="radio" ng-model="gender" name="gender" value="none">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row row-space">
                                <div class="col-6">
                                    <div class="input-group">
                                        <label class="label" for="email">Email</label>
                                        <input class="input--style-4" type="email" ng-model="email" name="email"
                                            placeholder="Enter Email" name="email" id="email"
                                            value="<?= set_value('email') ?>" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group">
                                        <label class="label" for="phonenum">Phone Number</label>
                                        <input class="input--style-4" type="text" ng-model="phonenum"
                                            placeholder="Format must be in +234xxxxx" name="phonenum" id="phonenum"
                                            required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-group">
                                        <label class="label" for="address">Address (Line 1)</label>
                                        <input class="input--style-4" type="text" ng-model="address"
                                            placeholder="Enter your address(must include Street No, City)"
                                            name="address" id="address" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-group">
                                        <label class="label" for="country">Address (Line 2)</label>
                                        <input class="input--style-4" type="text" ng-model="country"
                                            placeholder="Enter your state and country (e.g Lagos, Nigeria)"
                                            name="country" id="country" required>
                                    </div>
                                </div>
                            </div>

                            <!--
						<p><label for="job"><strong>Occupation(If Student, State So.)</strong></label>
							<input type="text" placeholder="Enter your occupation" name="job" id="job" required></p>
					 country,address,stateoforiginandphonenumberwillbechangedusingjslater -->

                            <div class="row row-space">
                                <div class="col-6">
                                    <div class="input-group">
                                        <label class="label">Marital Status</label>
                                        <div class="p-t-10">
                                            <label class="radio-container m-r-45">Single
                                                <input type="radio" checked="checked" ng-model="mstatus" name="mstatus"
                                                    value="single">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-container">Married
                                                <input type="radio" ng-model="mstatus" name="mstatus" value="married">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-container">Widowed &nbsp&nbsp&nbsp&nbsp&nbsp
                                                <input type="radio" ng-model="mstatus" name="mstatus" value="widowed">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-container">Divorced
                                                <input type="radio" ng-model="mstatus" name="mstatus" value="divorced">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group">
                                        <label class="label" for="nok">Name of Next of Kin</label>
                                        <input class="input--style-4" type="name" ng-model="nok"
                                            placeholder="Enter their name" name="nok" id="nok" required></p>
                                    </div>
                                </div>
                            </div>



                            <div class="row row-space">
                                <div class="col-6">
                                    <div class="input-group">
                                        <label class="label" for="username">Username</label>
                                        <input class="input--style-4" type="text" ng-model="username"
                                            placeholder="Enter your username" name="username" id="username" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group">
                                        <label class="label" for="password">Password</label>
                                        <input class="input--style-4" type="password" ng-model="password"
                                            name="password" id="password" placeholder="Enter Password" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group">
                                        <label class="label" for="psw-repeat">Repeat Password</label>
                                        <input class="input--style-4" type="password" ng-model="psw-repeat"
                                            placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
                                    </div>
                                </div>


                                <?php if (isset($validation)): ?>
                                <div class="col-12">
                                    <div class="alert alert-danger" role="alert">
                                        <?= $validation->listErrors() ?>
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>

                            <div class="p-t-15">
                                <button class="btn btn--radius-2 btn--blue" type="submit" id="submit-button"
                                    name="submit">Register&nbsp&nbsp <i class="fas fa-arrow-right"></i></button>
                            </div>
                            </form>
                        </div>
                        <br>
                        <p id="pid">Already have an account? <a href="/">Sign in</a>.</p>
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
        </div>
        </div>
        </div>
        </div>
    </main>
    <style>


    </style>

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