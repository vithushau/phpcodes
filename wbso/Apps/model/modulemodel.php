<?php
//Module class
class module{
    function getModuleByRole($role_id){
       global $con;
       $r=$con->prepare("SELECT * FROM module WHERE m_id IN (SELECT m_id FROM module_role WHERE role_id=?)");
        $r->execute(array($role_id));
       // $nor=$r->rowCount();
       // return $nor;
        
        // To get query error
        if($r->errorCode()!=0){
            $errors = $r->errorInfo();
            echo $errors[2];
        }
        
       return $r; 
    }
}

?>

