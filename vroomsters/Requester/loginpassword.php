<?php
define('TITLE', 'Change password');
define('PAGE', 'loginpassword');
include('../dbconnection.php');
session_start();
if($_SESSION['is_login'])
{
    $rEmail= $_SESSION['rEmail'];
   
}
else
{
    echo "<script> location.href='loginprofile.php'</script>";
}
$sql="SELECT  r_email,r_password FROM registration_tb WHERE
 r_email='$rEmail'";
 $result=$conn->query($sql);
 if($result->num_rows==1)
 {
     $row=$result->fetch_assoc();
     $rPassword=$row['r_password'];
 }

 if(isset($_REQUEST['nameupdate']))
 {
     if($_REQUEST['rPassword']=="")
     {
         $msg= '<div class="alert alert-danger mt-2"
         role="alert">Fill All Fields</div>';
     }
     else
     {
       $rPassword=  $_REQUEST['rPassword'];
       $sql="UPDATE registration_tb SET r_password='$rPassword'
       WHERE r_email='$rEmail'";
       if($conn->query($sql)== TRUE)
       {
           $msg='<div class="alert alert-success col-sm-6 ml-5
           mt-2" role="alert">Updated successfully</div>';
       }
       else
       {
        $msg='<div class="alert alert-danger col-sm-6 ml-5
        mt-2" role="alert">Unable to Update</div>';
    }

     }
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

    <!--custom css-->
    <link rel="stylesheet" href="../css/custom.css">
    <title>profile</title>
</head>
<body>
<!-- TOp naviagatrion bar-->
<nav class="navbar navbar-dark fixed-top" style="background-color:rgba(0,0,0,0.5);">
<a class="navbar-brand col-sm-3 col-md-2 mr-0"
 href="loginprofile.php"><img src="../images/logo.png" 
height=70 width=100></a></nav>
<!--start container-->
<div class="container-fluid" style="margin-top:79px;">
    <!--start row-->
    <div class="row">
    <!-- side bar col 1 -->
    <?php
    include('header.php') 
    ?>
    <!--end of side bar col 1-->

    <!--start profile are col 2-->
    <div class="col-sm-6 mt-5">
    <form action="" method="POST" class="mx-5">
    <div class="form-group">
    <label for="rEmail">Email</label><input type="email" 
    class="form-control" name="rEmail" id="rEmail"  value="<?php echo $rEmail ?>" 
    readonly>
    </div>
    <div class="form-group">
    <label for="rPassword">Password</label><input type="password" 
    class="form-control" name="rPassword" id="rPassword" placeholder="New Password">
    </div>
    <button type="submit" class="btn btn-success" name="nameupdate">Update</button>
    <?php
if(isset($msg))
        {
            echo $msg;
        }
            ?>
    
    </form>
    </div>
    <!--end profile area col 2-->
    </div>
    <!--end row-->
</div>
<!--end container-->

     <!--Javascript-->
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/all.min.js"></script>
</body>
</html>