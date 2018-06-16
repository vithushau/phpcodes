
<?php
session_start();
include '../common/dbconnection.php';
include '../model/usermodel.php';
$obuser= new user();
$resultuser=$obuser->viewUsers();
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
        <title>Web Based Sales and Ordering</title>
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
                            <li>
                                <a href="../view/dashboard.php">Dashboard</a>
                            </li>
                            <li class="active">User Management</li>
                        </ol>
                    </div>
                    <div class="col-md-6 col-sm-12">
                      <?php include'../common/prev.php'; ?>  
                       
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div id="lsb">
                <div class="row">
                   
                    <div class="col-md-12">
                        <h3 style="text-align: center">User Management</h3>
                        <div class="container-fluid"> <!-- for button -->
                            <button type="button" class="btn btn-success">
                                <i class="glyphicon glyphicon-plus-sign"></i>
                                <a href="../view/adduser.php">Add User</a>
                            </button>
                        </div>
                        <div class="clearfix">&nbsp;</div>
                    
                        <div class="container-fluid">
                            <table class="table table-responsive table-condensed">
                                <tr>
                                    <th>&nbsp;</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Gender</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>&nbsp;</th>
                                </tr>
                                <?php while ($rowuser=$resultuser->fetch(PDO::FETCH_BOTH)){
                                        $label="Activate";
                                        $statustbc=1;
                                        $class="success";
                                    if ($rowuser['user_status']=="Active"){
                                        $label="Deactivate";
                                        $statustbc=0;
                                        $class="danger";
                                    }
                                    
                                
                                    ?>
                                
                                <tr>
                                    <td>&nbsp;</td>
                                    <td><?php echo $rowuser['user_fname']; ?>&nbsp;</td>
                                    <td><?php echo $rowuser['user_lname']; ?>&nbsp;</td>
                                    <td><?php echo $rowuser['user_gender']; ?>&nbsp;</td>
                                    <td><?php echo $rowuser['role_name']; ?>&nbsp;</td>
                                    <td><?php echo $rowuser['user_status']; ?>&nbsp;</td>
                                    <td>
                                        <a href="../view/viewuser.php?user_id=<?php echo $rowuser['user_id']; ?>">
                                        <button type="button" class="btn-success btn-sm">View</button>
                                        </a>
                                        <a href="../view/edituser.php?user_id=<?php echo $rowuser['user_id']; ?>">
                                        <button type="button" class="btn-primary btn-sm">Edit</button>
                                        </a>
                                        <a href="../controller/usercontroller.php?user_id=<?php echo $rowuser['user_id']; ?>&statustbc=<?php echo $statustbc ?>">
                                        <button type="button" class="btn btn-<?php echo $class; ?> btn-sm"> <?php echo $label; ?> </button>
                                        </a>
                                        
                                    </td>
                                    
                                   
                                </tr>
                                <?php } ?>
                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div id="foot" style="text-align: center"> 
            <?php include '../common/footer.php'; ?>
            </div>
            
        </div>
    </body>
</html>
