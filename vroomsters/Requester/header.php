<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>
  <?php echo TITLE ?>
 </title>
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="../css/bootstrap.min.css">

 <!-- Font Awesome CSS -->
 <link rel="stylesheet" href="../css/all.min.css">

 <!-- Custome CSS -->
 <link rel="stylesheet" href="../css/custom.css">

</head>

<body>
<nav class="col-sm-3 bg-light sidebar py-5 shadow-lg p-4">
<div>
     <ul class="nav flex-column">
     <li class="nav-item"><a class="nav-link <?php if(PAGE == 'loginprofile') { echo 'active'; } ?> "
      href="loginprofile.php"><i class="fas fa-user">
      </i>Profile</a></li>
      <li class="nav-item"><a class="nav-link <?php if(PAGE == 'loginsubmit') { echo 'active'; } ?>"
      href="loginsubmit.php"><i class="fab fa-accessible-icon">
      </i>Submit Request</a></li>
      <li class="nav-item"><a class="nav-link <?php if(PAGE == 'loginstatus') { echo 'active'; } ?>"
      href="loginstatus.php"><i class="fas fa-align center">
      </i>Service Status</a></li>
      <li class="nav-item"><a class="nav-link active <?php if(PAGE == 'loginpassword') { echo 'active'; } ?>"
      href="loginpassword.php"><i class="fas fa-key">
      </i>Change Password</a></li>
      <li class="nav-item"><a class="nav-link"
      href="../loginlogout.php"><i class="fas fa-sign-out-alt">
      </i>Logout</a></li>
     </ul>
</div>
</nav>