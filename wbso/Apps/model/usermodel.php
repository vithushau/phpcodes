<?php
//login class
class user{
    function viewUsers(){
       global $con;
       $r=$con->prepare("SELECT * FROM user u,role r WHERE u.role_id=r.role_id");
        $r->execute(array());
       // $nor=$r->rowCount();
       // return $nor;
        
       return $r; 
    }
    
    function addUser($arr){
       global $con;
       $r=$con->prepare("INSERT INTO user (user_fname,user_lname,user_gender,user_dob,role_id,user_nic,user_tel,user_des,user_status) VALUES(?,?,?,?,?,?,?,?,?)"); // names in database
        $r->execute(array($arr['user_fname'],$arr['user_lname'],$arr['user_gender'],$arr['user_dob'],$arr['role_id'],$arr['user_nic'],$arr['user_tel'],$arr['user_des'],"Active")); // names used in forms
       // $nor=$r->rowCount();
       // return $nor;
       $user_id=$con->lastinsertId(); 
       return $user_id; 
       
       //To check errors
       if($r->errorCode()!=0){
            $errors = $r->errorInfo();
            echo $errors[2];
        }
       
    }
}

?>

