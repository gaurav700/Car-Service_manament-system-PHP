<?php
include('dbconnection.php');
if(isset($_REQUEST['submit']))
{  //Cheaking for empty field
    if( ($_REQUEST['rName']=="") ||($_REQUEST['rSubject']=="")||
    ($_REQUEST['rEmail']=="") || ($_REQUEST['rMessage']==""))
    {
         $msg= '<div class="alert alert-warning mt-2" role="alert">
         All Fields are required</div>';
    }
    else
         // submit database to the user
        {
        $Name =  $_REQUEST['rName'];
        $Subject = $_REQUEST['rSubject'];
        $Email = $_REQUEST['rEmail'];
        $Message =$_REQUEST['rMessage'];
        $sql="INSERT INTO contact_tb(r_name,r_subject,r_email,r_message)
        VALUES('$Name','$Subject','$Email','$Message')";
        // message show for successful email id alerdy or unable to create account
        if( $conn->query($sql)== TRUE)
            {
                    $msg= '<div class="alert alert-success mt-2"
                    role="alert">Send Successfully</div>';
            }
        else
            {
                    $msg= '<div class="alert alert-danger mt-2"
                    role="alert">Unable To send</div>';
            }
        }
}
?>
<div class="col-md-8">
        <form action="" methods="POST">
            <input type="text" class="form-control" placeholder="Name"
            name="rName" ><br>
            <input type="text" class="form-control" placeholder="Subject"
            name="rSubject"><br>
            <input type="email" class="form-control" placeholder="Email"  
            name="rEmail"><br>
            <textarea class="form-control" placeholder="how do we help you?"
             name="rMessage" style="height:150px;">
            </textarea><br>
            <input type="submit" class="btn btn-success" value="Send" name="submit">
           <?php
            if(isset($msg))
        {
            echo $msg;
        }
            ?>
        </form>
</div>