<?php
include '../common/dbconnection.php';
include '../model/usermodel.php';
include '../model/loginmodel.php';

$obuser=new user();
$obl= new login();


$action=$_REQUEST['action'];  //here [action]-> menas after ? mark action
//use of $_REQUEST we can get by url or by form
switch ($action){
    case "add":
        $arr=$_POST;
        //print_r($arr);
       $resultl= $obl->checkEmail($_POST['email']); // $arr['email']
       $n=$resultl->rowCount();
       if($n==0){
           $user_id=$obuser->addUser($arr);
       }else{
           header("Location:../view/adduser.php");
       }
       
        
        
    break;    
}








?>

