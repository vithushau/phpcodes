<?php
//login class
class role{
    function viewRoles(){
       global $con;
       $r=$con->prepare("SELECT * FROM role ORDER BY role_id");
        $r->execute();
       // $nor=$r->rowCount();
       // return $nor;
       return $r; 
    }
}

?>


