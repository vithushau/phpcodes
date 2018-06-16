<?php
session_start(); //start session
//To call database connection page 
include '../common/dbconnection.php';
include '../model/loginmodel.php'; // to include page with login class 
//include '../model/logmodel.php';


//To get input
$user_name=$_POST['user_name'];
$password=($_POST['password']); // used one way encryption 

$object1=new stafflogin(); //create an object based on login class
$result=$object1->getlogindetails($user_name,$password);
$nor=$result->rowCount();
//To call a method in login classs
//echo $nor; validation part output 0 1

//server side validation - check email and password
//if($nor==1) or if($nor>=1)
if($nor) {
   // $row=$result->fetch(PDO::FETCH_BOTH);
    ////log details
   // $staff_id=$row['staff_id'];
    ////$status="login";
   // $oblog= new log(); // create an object rom log class
    //echo $log_id=$oblog->getlogindetails($staff_id);
   // array_push($row,$log_id);
   // $_SESSION['user_info']=$row; // assign an array into se
    //var_dump($row);
    header("Location:../view/dashboard.php");   
}else{
    //to encode message
    $msg=base64_encode("Invalid Email or Password");
    header("Location:../view/login.php?msg=$msg"); //using ? we can differ the path amd message
    
}
?>