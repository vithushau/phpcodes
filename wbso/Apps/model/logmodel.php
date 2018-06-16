<?php
//login class
class log{
    
    
    function logInDetails($status,$user_id){
       global $con;
       $r=$con->prepare("INSERT INTO log(log_in,log_status,user_id) VALUES(NOW(),?,?)");
        $r->execute(array($status,$user_id));
         $log_id=$con->lastInsertid();
       // $nor=$r->rowCount();
       // return $nor;
      // return $r; 
       return $log_id;
        // To get query error
        if($r->errorCode()!=0){
            $errors = $r->errorInfo();
            echo $errors[2];
        }
        
    }



 function logOutDetails($log_id){
       global $con;
       $r=$con->prepare("UPDATE log SET log_out=NOW(),log_status=? WHERE log_id=?");
        $r->execute(array("logout",$log_id));
         
       // $nor=$r->rowCount();
       // return $nor;
      // return $r; 
      
        // To get query error
        if($r->errorCode()!=0){
            $errors = $r->errorInfo();
            echo $errors[2];
        }
        
    }
}
?>

