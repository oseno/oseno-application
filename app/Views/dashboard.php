<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" href="faviconn.ico">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css" integrity="sha512-P9vJUXK+LyvAzj8otTOKzdfF1F3UYVl13+F8Fof8/2QNb8Twd6Vb+VD52I7+87tex9UXxnzPgWA3rH96RExA7A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Dashboard</title>

<!-- Bootstrap core CSS -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/35e38b559c.js" crossorigin="anonymous"></script>
  <!-- Favicons -->
  
 
</head>

  </head>
  <body>
    <?php
      $uri = service('uri');
     ?>
     
     <div class="content">
   <!-- Sidebar -->
<div class="w3-sidebar w3-blue-grey w3-bar-block" style="width:10%">
<?php if (session()->get('isLoggedIn')): ?>

  <a href="/dashboard"<?= ($uri->getSegment(1) == 'dashboard' ? 'active' : null) ?> class="w3-bar-item w3-button">  <i class="fas fa-clipboard"></i>   &nbsp Dashboard</a>
  <br>
  <a href="/logout" class="w3-bar-item w3-button">      <i class="fas fa-power-off"></i>&nbsp  Logout</a>

  <?php else: ?>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item <?= ($uri->getSegment(1) == '' ? 'active' : null) ?>">
            <a class="nav-link" href="/">Login</a>
          </li>
          <li class="nav-item <?= ($uri->getSegment(1) == 'register' ? 'active' : null) ?>">
            <a class="nav-link" href="/register">Register</a>
          </li>
        </ul>
        <?php endif; ?>
</div>     
    


<section>
<div class="container">
  
<div class="row">
<h3 class="pdetailsh4">WELCOME TO YOUR DASHBOARD, <?= session()->get('username') ?> !</h3>


</div> 
</div>

  </section>

<hr>





<section id="personaldetails">
<div class="container">
        <div class="row">

            <div class="pdetails-box col-lg-3">
            <table cellspacing="0">
      <tbody><tr>
        <td id="pdetailsicon"> <i style="color:white;"class="icon fa fa-birthday-cake fa-2x"></i></td>
        
        <td>
        <h3 class="pdetails-title"><u>
                Birthday</u></h3>
                <h5 class="pdetails-title">Your birthday is <strong> <?= session()->get('dob') ?></strong></h5>
       </td>
      </tr>
    </tbody></table>  
            </div>

            <div class="pdetails-box col-lg-4">
            <table cellspacing="0">
      <tbody><tr>
        <td id="pdetailsicon"> <i style="color:white;"class="icon fa fa-address-book fa-2x">&nbsp</i></td>
        
        <td>
        <h3 class="pdetails-title"> <u>Contact</u></h3>
        <h5 class="pdetails-title">Your phone number is  <strong><?= session()->get('phonenum') ?></strong> 
        and your email is  <strong><?= session()->get('email') ?></strong></h5>
            
       </td>
      </tr>
    </tbody></table>  
</div>
            
            <div class="pdetails-box col-lg-4">
            <table cellspacing="0">
      <tbody><tr>
        <td id="pdetailsicon"> <i style="color:white;"class="icon fa fa-home fa-2x"></i></td>
        
        <td>
        <h3 class="pdetails-title" ><u>Address</u></h3>
                <h5 class="pdetails-title">You live in <strong> <?= session()->get('address') ?></strong> in  <strong><?= session()->get('country') ?></strong></h5>
         
       </td>
      </tr>
    </tbody></table>  
               
            </div>

            </div>
        </div>
    </section>


    
    




<div class="container">
  

  <h4 class="pdetailsh4">More Personal Details</h4>
  <hr>
  <div class="pdetails">
  <p><i class="icon fas fa-file-signature fa-2x"></i> &nbsp&nbsp Your full name is <strong><?= session()->get('fname') ?> <?= session()->get('mname') ?> <?= session()->get('lname') ?></strong></p>
  </div>
  <br>
  <div class="pdetails">
  <p><i class="icon fas fa-venus-mars fa-2x"></i> &nbsp&nbsp You identify as <strong><?= session()->get('gender') ?></strong></p>
  </div>
  <br>
  <div class="pdetails">   <p><i class="icon fas fa-heart fa-2x"></i> &nbsp&nbsp Your marital status is  <strong><?= session()->get('mstatus') ?></strong></p>
  </div>
  <br>
  <div class="pdetails">   <p><i class="icon fas fa-user-check fa-2x"></i> &nbsp &nbspYour next of kin is  <strong><?= session()->get('nok') ?></strong></p>
  </div>     

  </div>






<!-- Footer -->
<footer id="footer">
		<div class="container-fluid">
		<p>© Copyright 2021 Oseno</p>
		</div>
	</footer>


  </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




</body>
<style>

.content{
  background-color: #ffffff;
  font-family: 'Quicksand', sans-serif;
    color: #4B6587;
    /* font-size: 13px; */
    font-weight: 400;
}

.w3-sidebar{
  padding-top: 3%;
}
  /* DASHBOARD */

.pdetails-title {
  font-size:17px;
  font-family: 'Quicksand', sans-serif;
}

.pdetails-box {
    /* padding: 4.5%;
  background-color: #4B6587;
   */
  border: 1px solid #4B6587;
  border-radius: 25px 25px 0 5px;
  padding: 20px;
  width:200px;
  height: 200px;
  margin: 10px;

  background-color: #4B6587;
    background-image: url("/img/questionbg.png") ;
   color:white;
}

.icon {
  color: #4B6587;
  margin-bottom: 1rem;
}

.icon:hover {
  color:#DBE6FD ;
}

.pdetails{
  width: 200px;
 height:60px;
  padding-left:35px;
  border: 1px solid #4B6587;
  border-radius: 25px 25px 0 5px;
  padding-top:10px;
}

.pdetails icon{
  color: #4B6587;
  margin-bottom: 1rem;
padding-left:4%;
}
.pdetailsh4{
  color:#b81924;
  padding-top:20px;
  font-family: 'Quicksand', sans-serif;
 }
.container{
  padding-left: 10%;
  
}
#footer{
  background-color: #ffffff;
  padding-top:5%;
  text-align:center;
}
#pdetailsicon{
  width:20%;
}
</style>


</html>
