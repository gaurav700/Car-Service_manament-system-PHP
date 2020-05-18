<?php
include('../dbconnection.php');
session_start();
if(!isset($_SESSION['is_login']))
{
if(isset($_REQUEST['rLogin']))
{
    if(($_REQUEST['rEmail']=="") ||($_REQUEST['rPassword']==""))
    { 
         $msg= '<div class="alert alert-warning mt-2" role="alert">
         All Fields are required</div>';
    }
    else
    {
    $rEmail=mysqli_real_escape_string($conn,trim($_REQUEST['rEmail']));
    $rPassword=mysqli_real_escape_string($conn,trim($_REQUEST['rPassword']));
    $sql = "SELECT r_email, r_password FROM registration_tb
    WHERE r_email = '".$rEmail."' AND r_password = '".$rPassword."' limit 1";
    $result = $conn->query($sql);
        if($result->num_rows==1)
            {     $_SESSION['is_login']=true;
                $_SESSION['rEmail']=$rEmail;
               echo "<script> location.href='loginprofile.php';</script>";
              exit;
            }
            else{
                 $msg= '<div class="alert alert-danger mt-2"
                 role="alert">Enter valid Email Id and Password</div>'; 
                }
    }
}
}
else{
    echo "<script> location.href='loginprofile.php';</script>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="../css/all.min.css">
    <title>Login</title>
</head>
<body>
<div class="mt-5 mb-2 text-center" style="font-size:30px;">
<i class="fas fa-car text-success"></i>
<span>VROOMSTERS</span>
</div>
<p class="text-center" style="font-size:20px;">
<i class="fas fa-user-secret text-danger"></i>User Login</p>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-sm-6 col-md-4">
            <form action="" class="shadow-lg p-4" method="POST">
                <div class="form-group">
                    <i class="fas fa-user-circle"></i><label for="email" 
                    class="font-weight-bold pl-2">Email</label>
                    <input type="email" class="form-control" placeholder="Email"
                     name="rEmail">
                     <small class="form-text">We'll never share your email with anyone else</small>
                </div>
                <div class="form-group">
                    <i class="fas fa-key"></i><label for="pass" 
                    class="font-weight-bold pl-2">Password</label>
                    <input type="password" class="form-control" placeholder="Password"
                     name="rPassword">
                </div>
                <button type="submit" class="btn btn-outline-danger mt-3 btn-block
                shadow-sm font-weight-bold shadow-sm" name="rLogin">Login</button>
                <em style="font-size:10px">Note - By clicking Login,
            you agree to our Terms, Data Policy and Cookie Policy</em>
            <?php
        if(isset($msg))
        {
            echo $msg;
        }
            ?>
            </form>
            <div class="text-center"><a href="../index.php"
            class="btn btn-info font-weight-bold shadow-sm mt-2">Back to Home</a></div>
        </div>
    </div>
</div>
    <!--Javascript-->
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/all.min.js"></script>
</body>
</html>