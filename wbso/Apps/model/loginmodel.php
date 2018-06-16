<?php
//login class
class login{
    function loginMethod($email,$password,$status){
       global $con;
       $r=$con->prepare("SELECT * FROM login l,user u, role r WHERE u.user_id=l.user_id AND r.role_id=u.role_id AND l.email=? AND l.password=? AND u.user_status=?");
        $r->execute(array($email,$password,$status));
       // $nor=$r->rowCount();
       // return $nor;
       return $r; 
    }
    
    
    function checkEmail($email){
       global $con;
       $r=$con->prepare("SELECT * FROM login WHERE email=?");
        $r->execute(array($email));
       // $nor=$r->rowCount();
       // return $nor;
       return $r; 
    }
}

?>

