<?php
//login class
class stafflogin{
    function getlogindetails($user_name,$password){
       global $con;
       $result=$con->prepare("SELECT * FROM stafflogin WHERE user_name=? AND password=?");
        $result->execute(array($user_name,$password));
       // $nor=$r->rowCount();
       // return $nor;
        
       return $result; 
    }
}

?>

