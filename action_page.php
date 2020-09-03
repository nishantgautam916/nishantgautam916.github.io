<?php
    $fname = $_POST["fname"];
$lname = $_POST["lname"];
$product = $_POST["product"];

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "customer care";
$conn = new mysqli($dbhost, $dbuser,$dbpass,$db);
if (!$conn){
    die("connection failed". mysqli_connect_error());
    
    
}
else {
    echo "connection was successful";

}
    

   
$sql1 = "SELECT * from nishant where `first name`= '$fname' AND `last name`= '$lname' AND product= '$product'  ";
$result1 = mysqli_query($conn, $sql1);
$num = mysqli_num_rows($result1);
if ($num>0) {
    
    echo "you already processed your request and we are working on it";
}
else {
    $sql = "INSERT INTO `nishant` (`first name`, `last name`, `product`) VALUES ('$fname', '$lname', '$product')";
    $result=mysqli_query($conn,$sql);
    if ($result){
        echo "we have recieved your request now";
        
    }
    else {
        echo "Something is wrong". mysqli_error($conn);
    }
        
           
    }
           ?>

