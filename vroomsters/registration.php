<?php
include('dbconnection.php');
if(isset($_REQUEST['rSignup']))
{  //Cheaking for empty field
    if(($_REQUEST['rName']=="") ||($_REQUEST['rEmail']=="")||
        ($_REQUEST['rPassword']==""))
        {
             $msg= '<div class="alert alert-warning mt-2" role="alert">
             All Fields are required</div>';
        }
    // cheaking for duplication of email id
    else
        {
         $sql="SELECT r_email FROM registration_tb WHERE
         r_email='".$_REQUEST['rEmail']."'";
         $result=$conn->query($sql);
         if($result->num_rows==1)
         {
             $msg= '<div class="alert alert-danger mt-2"
             role="alert">Email ID ALready Registered</div>';
         }
         else
         // submit database to the user
        {
        $user_name=  $_REQUEST['rName'];
        $user_email= $_REQUEST['rEmail'];
        $user_password= $_REQUEST['rPassword'];
        $sql="INSERT INTO registration_tb(r_name,r_email,r_password)
        VALUES('$user_name','$user_email','$user_password')";
        // message show for successful email id alerdy or unable to create account
       if( $conn->query($sql)== TRUE)
       {
           $msg= '<div class="alert alert-success mt-2"
            role="alert">Account Successfully Created</div>';
       }
       else
       {
           $msg= '<div class="alert alert-danger mt-2"
            role="alert">Unable To Create Account</div>';
       }
        }
    }
}
?>
<!--user registration from -->
<div class="container pt-5" id="registration">
    <h6 class="text-center" style="font-size:30px;">Create an Account</h6>
    <div class="row mt-4 mb-4">
        <div class="col-md-6 offset-md-3">
            <form action="" class="shadow-lg p-4" method="POST">
                <div class="form-group">
                    <i class="fas fa-user"></i><label for="name" 
                    class="font-weight-bold pl-2">Name</label>
                    <input type="text" class="form-control" placeholder="Name"
                     name="rName">
                </div>
                <div class="form-group">
                    <i class="fas fa-user"></i><label for="email" 
                    class="font-weight-bold pl-2">email</label>
                    <input type="email" class="form-control" placeholder="Email"
                     name="rEmail">
                     <small class="form-text">We'll never share your email with anyone else</small>
                </div>
                <div class="form-group">
                    <i class="fas fa-key"></i><label for="name" 
                    class="font-weight-bold pl-2">Password</label>
                    <input type="password" class="form-control" placeholder="Password"
                     name="rPassword">
                </div>
                <button type="submit" class="btn btn-text bg-success mt-3 btn-block
                shadow-sm font-weight-bold" name="rSignup">Sign Up</button>
                <em style="font-size:10px">Note - By clicking Sign Up,
            you agree to our Terms, Data Policy and Cookie Policy</em>
        <?php
        if(isset($msg))
        {
            echo $msg;
        }
            ?>
            </form>
        </div>
    </div>
</div>