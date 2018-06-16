<?php
session_start();
include '../common/dbconnection.php';
include '../model/logmodel.php';

$user_info=$_SESSION['user_info'];
//$log_id=$user_info[17];
$oblog=new log();
$oblog->logOutDetails($log_id);
unset($_SESSION['user_info']);
header("refresh:5,url=../view/login.php");
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sunwaay Lanka Lab</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" typr="text/css" href="../css/font-awesome.min.css"/>
        
    </head>
    <body>
        <div id="main">
            <div id="head">
                <?php include '../common/header.php'; ?>
            </div>
            <div id="navi">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <ol class="breadcrumb">
                            <li class="active">LogOut</li>
                        </ol>
                    </div>
                    <div class="col-md-6 col-sm-12">
                     <?php// include'../common/prev.php'; ?>  
                       
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div id="lsb">
                <div class="row">
                    <div class="col-md-3">
                        
                    </div>
                    <div class="col-md-9"> 
                        <h3>You Have Been Successfully logged Out</h3>
                        <a href="../view/login.php">Login</a>
                        <br/>
                        <img src="../images/doggie.jpg"
                    </div>
                </div>
            </div>
            <div id="foot" style="text-align: center"> 
            <?php include '../common/footer.php'; ?>
            </div>
            
            
        </div>
    </div>
    </body>
</html>


