<?php
session_start();
include('dbconnect.php');
?>

<!doctype html>
<html lang="en">

<head>
    <title>ADMIN</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/c0fc838bea.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2&display=swap" rel="stylesheet">



</head>

<style type="text/css">
 
#body-bg
{
  height: 100vh;
  width: 100%;
  background: linear-gradient(115deg, rgb(99, 151, 99) 10%, olivedrab 90%);
}
  

.container{
  position: absolute;
  top: 50%;
  left: 58%;
  transform: translate(-50%, -50%);
  
}

.container {
  background: #fff;
  width: 2000px;
  padding: 33px;
  height: 500px;
  box-shadow: 0 0 8px black;
}


.container .text {
    font-size: 35px;
    font-weight: 600;
    text-align: center;
}

.container form {
    margin-top: 20px;
	margin-left:10px;
}

.container form .form-group{
    height: 45px;
    width: 100%;
    margin: 35px 0;
    
}

form .form-group input {
    height: 100%;
    width: 100%;
    padding-left: 10px;
    font-size: 17px;
    border: 1px solid silver;
    margin-top: 2px;
    letter-spacing: 1px;
    font-weight: bold;
	color: black;
    
}




.error{
  color:red;
}

</style>


<body>
    <!---Nav bar-->
    <nav class="navbar navbar-expand-md navbar-light">
        <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#navbar">
<span class="navbar-toggler-icon"></span>

</button>
        <div class="collapse navbar-collapse" id="navbar">
            <div class="container-fluid">
                <div class="row">
                    <!---Sidebar-->
                    <div class=" col-xl-2 col-lg-3 col-md-4 sidebar fixed-top">
                        <a href="#" class="navbar-brand text-white d-block
                mx-auto text-center py-3 mb-4" style="font-size: 32px; font-family:cursive;"><i class="fa fa-paper-plane text-light fa-6"> Bhramann</i></a>

                        <ul class="navbar-nav flex-column mt-4">
                            <li class="nav-item"><a href="http://localhost/Bhramann-main/admin/" class="nav-link text-white p-3 mb-2
                    sidebar-link"><i class="fas fa-home text-light fa-lg mr-3"></i>
                Dashboard</a></li>
                            <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2
                    current"><i class="fas fa-user text-light fa-lg mr-3"></i>
                Profile</a></li>
                            <li class="nav-item"><a href="pack.html" class="nav-link text-white p-3 mb-2
                    sidebar-link"><i class="fas fa-briefcase text-light fa-lg mr-3"></i>
                Tour Packages</a></li>
                            <li class="nav-item"><a href="manage-user.html" class="nav-link text-white p-3 mb-2
                    sidebar-link"><i class="fas fa-users text-light fa-lg mr-3"></i>
                Manage Users</a></li>
                            <li class="nav-item"><a href="booking.html" class="nav-link text-white p-3 mb-2
                    sidebar-link"><i class="fas fa-book text-light fa-lg mr-3"></i>
                Manage Booking</a></li>
                            <li class="nav-item"><a href="issues.html" class="nav-link text-white p-3 mb-2
                    sidebar-link"><i class="fa fa-folder-open text-light fa-lg mr-3"></i>
                Manage Issues</a></li>
                            

                    </div> 
                    <!---end of side bar-->
                    <!---Top Nav-->
                    <div class="col-xl-10 col-lg-9 col-md-8 ml-auto top-bar fixed-top py-2 top-nav">
                        <div class="row align-item-center">
                            <div class="col-md-4">
                                <h4 class="text-light text-uppercase mb-0">ADMIN PANEL</h4>
                            </div>
                            <div class="col-md-5">
                                <h4 style="color:white">WELCOME &nbsp;ADMINISTRATOR</h4>
                            </div>
                            <div class="col-md-3">
                                <ul class="navbar-nav">
                                    <li class="nav-item icon-parent">
                                        <a href="#" class="nav-link icon-bullet">
                                            <i class="fas fa-comments text-light fa-lg"></i></a>
                                        <li class="nav-item icon-parent">
                                            <a href="#" class="nav-link icon-bullet">
                                                <i class="fas fa-bell text-light fa-lg"></i></a>
                                               
                                            <li class="nav-item ml-md-auto">
                                                <a href="#" class="nav-link" data-toggle="modal" data-target="#sign-out">
                                                    <i class="fas fa-sign-out-alt text-danger fa-lg"></i></a>
                                </ul>
                            </div>
                        </div>
                    </div> 
                    <!---End of Top Nav-->
                </div>
            </div>
        </div>
    </nav>
    <!----End of Navbar-->
    <!---Modal-->
    <div class="modal" id="sign-out">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Signout</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    press the button
                </div>
                <div class="modal-footer">
                    <a href="http://localhost/Bhramann-main/admin/login.php"><button type="button" class="btn btn-success">
                    Leave </button></a>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                    Cancel    </button>
                </div>
            </div>
        </div>
    </div>
    <!---End of Modal-->
	<section>
	<div class='container'>
 
    <div class="text">Change Password</div>

     <form action=" " method="POST">
     <div class="form-group">

	 
		<input type="password" class="form-control" name="crpass" id="crpass" placeholder="Current Password" required="">
		</div>
	<div class="form-group">
   
	<input type="password" class="form-control" name="npass" id="npass" placeholder="New Password" required="">
	</div>
     
	 <div class="form-group">
     
    <input type="password"  name="cpass" placeholder="Confirm Password" id="cpass" class="form-control" required=""> 
      
    </div>
    <button type="submit" name="submit" class="btn-primary btn">Submit</button>
	<button type="reset" class="btn-inverse btn">Reset</button>

    </form>
  
 </div> 
	
    </section>

    

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
	</html>

<?php

if(isset($_POST['submit']))
  {
	if(isset($_SESSION['user']))
	{
	   $username = $_SESSION['user'];
	   $query = "select * from admin where user = '$username'";
	   $run = mysqli_query($con,$query);
	   $row = mysqli_fetch_array($run); 
	   $user_password = $row[1];

	   $current_password = $_POST['crpass'];
	   
	   $new_password = $_POST['npass'];
	   
	   $confirm_password = $_POST['cpass'];

	   if($current_password == $user_password)
	   {
			 if($new_password == $confirm_password)
			 {
				$query = "update admin set pass = '$new_password' where user = '$username'";
				$run = mysqli_query($con,$query);
				if($run)
				{
                    echo "<script>alert('password changed sucessfully...');</script>";
				}
				else{
					echo "<script>alert('password changing failed...');</script>";
				}
			 }else
			 {
				echo "<script>alert('new password and confirmed password must be same...');</script>";
			 }
	   }
	   else{
		   echo "<script>alert('current password is invalid...');</script>";
	   }

	}else
	{
		header('location:change-password.php');
	}
  }
?>
