<?php
session_start(); //start session
//To call database connection page 
include '../common/dbconnection.php';
include '../model/loginmodel.php'; // to include page with login class 
include '../model/logmodel.php';


//To get input
$email=$_POST['email'];
$password=sha1($_POST['password']); // used one way encryption 

$obl=new login(); //create an object based on login class
$r=$obl->loginMethod($email,$password,"Active");
$nor=$r->rowCount();
//To call a method in login classs
//echo $nor; validation part output 0 1

//server side validation - check email and password
//if($nor==1) or if($nor>=1)
if($nor) {
    $row=$r->fetch(PDO::FETCH_BOTH);
    //log details
    $user_id=$row['user_id'];
    $status="login";
    $oblog= new log(); // create an object rom log class
    echo $log_id=$oblog->logInDetails($status, $user_id);
    array_push($row,$log_id);
    $_SESSION['user_info']=$row; // assign an array into se
    var_dump($row);
    header("Location:../view/dashboard.php");   
}else{
    //to encode message
    $errmsg=base64_encode("Invalid Email or Password");
    header("Location:../view/login.php?errmsg=$errmsg"); //using ? we can differ the path amd message
}
?>