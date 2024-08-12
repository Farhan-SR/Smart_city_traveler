<?php
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$number = $_POST['number'];
$password = $_POST['password'];

//connection data base
$conn = new mysqli('localhost','root','','registration');
if ($conn->connect_error){
    die('connection failed : ' ..$conn->connect_error);

}else{
    $stmt = $conn->prepare("insert into registration (first_name,last_name,email,number,password) values(?,?,?,?,?)");
    $stmt-> bind_param("sssss",$first_name,$last_name,$email,$number,$password);
    echo " register successfully" ;
    $stmt->close();
    $conn->close();
}
?>