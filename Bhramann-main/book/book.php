<?php
$name = $_POST['name'];
$email = $_POST['email'];

$date1 = $_POST['check-in'];
$date2 = $_POST['check-out'];
$adult = $_POST['adults'];
$children = $_POST['children'];
$room = $_POST['room'];
if( !empty($name) || !empty($email) || !empty($check-in) || !empty($check-out) || !empty($adults) || (!empty($children) || ($room)))
{
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "web";

    $conn = new mysqli($host , $dbUsername , $dbPassword , $dbname);

    if(mysqli_connect_error()){
        die('Connect Error{' .mysqli_connect_errno().')' . mysqli_connect_error());
    }else{
           $SELECT =  "SELECT email FROM sheet1 Where email = ? Limit 1";
             $INSERT = "INSERT Into sheet1  ( name , email , check-in , check-out , adults , children , room ) values(? ,? , ? , ? , ? , ? , ?  )";
            $stmt = $conn->prepare($SELECT);
            $stmt->bind_param("s", $email);
            $stmt->bind_result($email);
            $stmt->store_result();
            $rnum = $stmt->num_rows;

            if($rnum==0){
                
                echo "<script>alert('booking confirmed');
                window.location='http://localhost/Bhramann-main/book/book.html';</script>";
    ;
            }
            else{
                echo "Already register";
            }

    }

}else{
    echo "All fields are Required";
    die();
}

?>

