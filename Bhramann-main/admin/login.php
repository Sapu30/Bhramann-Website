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

?>
<html>
<title></title>


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
  left: 50%;
  transform: translate(-50%, -50%);
  
}

.container {
  background: #fff;
  width: 410px;
  padding: 33px;
  height: 300px;
  box-shadow: 0 0 8px black;
}

.container .close-btn {
    position: absolute;
    right: 20px;
    top: 15px;
    font-size: 18px;
    cursor: pointer;
}

.container .close-btn:hover {
    color: black;
}

.container .text {
    font-size: 35px;
    font-weight: 600;
    text-align: center;
}

.container form {
    margin-top: 20px;
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
    
}

form .form-group input:focus {
    border-color: #3498db;
    border-bottom-width: 2px;
}

.container .close {
  position: absolute;
  right: 20px;
  top: 15px;
  font-size: 30px;
  cursor: pointer;
  color: black;
}

.container .close:hover {
    color: black;
}

.error{
  color:red;
}

</style>

<body id="body-bg">
 <div class='container'>
 <a href="http://localhost/Bhramann-main/"><i class="close" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</i></a>
    <div class="text">Admin Form </div>

     <form action="check.php" method="POST">
     <div class="form-group">
   
       <input type="email" name="user" placeholder="Admin Id"class="form-control" required>     
        
        </div>
      
     
     <div class="form-group">
     
    <input type="password"  name="pass" placeholder="Password" class="form-control" required> 
      
     </div>
     
     <div class="form-group">
     <center><b><input type="submit" name="submit" value="LOGIN" class="btn-success" style="background-color:olivedrab"></b></center>
   </div>
     </form>
  
  
  
  </div>
  </div>
 </div> 
</body>
</html>

