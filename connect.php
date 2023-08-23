<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

//DATABASE CONNECTION
$conn = new mysqli('localhost', 'root', '', 'cart_system');
if($conn->connect_error){
    die('Connection Failed : ' -$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into contact(name, email, message)
        values(?,?,?)");
    $stmt->bind_param("sss", $name, $email, $message );
    $stmt->execute();
        echo ("Your order has been submitted successfully.");
        include("index.php"); 
    $stmt->close();
    $conn->close();

}
?>