
<?php
session_start();

$con = mysqli_connect('localhost','root');
if($con)
{
    echo " ";
}
else{
    echo "not connected";
}

$db = mysqli_select_db($con,'web');

if(isset($_POST['submit']))
{
    $username = $_POST['user'];
    $password = $_POST['pass'];
    
    $sql = "select * from admin where user = '$username' AND pass = '$password'";

    $query = mysqli_query($con,$sql);
   
    $row = mysqli_num_rows($query);{
        if($row == 1){
            echo "login successful";
            $_SESSION['user'] = $username;
            header('location:index.php');
        }
        else
        {
            echo "<script>alert('invalid details');
            window.location='login.php';</script>";

        }
    }

}

?>