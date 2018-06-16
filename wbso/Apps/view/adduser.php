
<?php
session_start();
include '../common/dbconnection.php';
include '../model/rolemodel.php';
$obrole= new role();
$resultrole=$obrole->viewRoles();
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
                            <li >User Management</li>
                             <li class="active">Add User</li>
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
                        <h3 style="text-align: center">Add User</h3>
                        <br>
                        
                        <form method="post" action="../controller/usercontroller.php?action=add"
                              enctype="multipart/form-data">  <!-- here we say add means we go to user controller for adding purpose -->
                    <div class="container-fluid">
                        <div>
                            <!-- Start first row -->
                            <div class="row">
                                <div class="col-md-1">&nbsp;</div>
                                <div class="col-md-2">First Name</div>
                                <div class="col-md-3">
                                    <input type="text" name="user_fname" id="user_fname" placeholder="First Name" class="form-control" />
                                    </div>
                                   <div class="col-md-2">Last Name</div>
                                <div class="col-md-3">
                                    <input type="text" name="user_lname" id="user_lname" placeholder="Last Name" class="form-control" />
                                    </div>
                                   <div class="col-md-1">&nbsp;</div>
                            </div>  <!-- End of First row -->
                            <div class="clearfix">&nbsp;</div>
                             <!-- Start Second  row -->
                             <div class="row">
                                 <div class="col-md-1">&nbsp;</div> 
                                <div class="col-md-2">Email</div>
                                <div class="col-md-3">
                                    <input type="email" name="email" id="email" placeholder="Email" class="form-control" />
                                    </div>
                                   <div class="col-md-2">Gender</div>
                                <div class="col-md-3">
                                    <input type="radio" name="user_gender" id="m" value="male"  /> Male 
                                     <input type="radio" name="user_gender" id="f" value="female"  /> Female
                                    </div>
                                   
                                   <div class="col-md-1">&nbsp;</div>
                            </div>  <!-- End of Second row -->
                            <br>
                            
                             <!-- Start Third row -->
                             <div class="row">
                                 <div class="col-md-1">&nbsp;</div> 
                                <div class="col-md-2">DOB</div>
                                <div class="col-md-3">
                                    <input type="date" name="user_dob" id="user_dob" class="form-control" />
                                    </div>
                                   <div class="col-md-2">NIC</div>
                                <div class="col-md-3">
                                    <input type="text" name="user_nic" id="user_nic" placeholder="NIC" class="form-control" />
                                    </div>
                                   <div class="col-md-1">&nbsp;</div>
                            </div>  <!-- End of Third row -->
                             <div class="clearfix">&nbsp;</div>
                            <!-- Start forth row -->
                            <div class="row">
                                <div class="col-md-1">&nbsp;</div>
                                <div class="col-md-2">Tel</div>
                                <div class="col-md-3">
                                    <input type="text" name="user_tel" id="user_tel" placeholder="Tel Number" class="form-control" />
                                    </div>
                                   <div class="col-md-2">Photo</div>
                                <div class="col-md-3">
                                    <input type="file" name="user_image" id="user_image" class="form-control" />
                                    </div>
                                   <div class="col-md-1">&nbsp;</div>
                            </div>  <!-- End of Forth row -->
                            <div class="clearfix">&nbsp;</div>
                            
                            <!-- Start fifth row -->
                            <div class="row">
                                <div class="col-md-1">&nbsp;</div>
                                <div class="col-md-2">Description</div>
                                <div class="col-md-3">
                                    <textarea name="user_des" id="user_des" class="form-control"></textarea>
                                    </div>
                                   <div class="col-md-2">Role Name</div>
                                <div class="col-md-3">
                                    <select name="role_id" id="role_id" class="form-control">
                                    <option value="">Select a Role</option>
                                    <?php while($rowrole=$resultrole->fetch(PDO::FETCH_BOTH)) { ?>
                                    <option value="<?php echo $rowrole['role_id']; ?>">
                                        <?php echo $rowrole['role_name']; ?> </option>
                                    <?php } ?>
                                    </select>
                                    </div>
                                   <div class="col-md-1">&nbsp;</div>
                            </div>  <!-- End of Fifth row -->
                            <div class="clearfix">&nbsp;</div>
                            
                             <!-- Start Sixth row -->
                            <div class="row">
                                <div class="col-md-1">&nbsp;</div>
                                <div class="col-md-2">&nbsp;</div>
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-success" name="save">Save</button>
                                    </div>
                                <div class="col-md-2">
                                    <button type="reset" class="btn btn-danger" name="clear">Clear</button>
                                </div>
                                <div class="col-md-3">&nbsp;</div>
                                <div class="col-md-1">&nbsp;</div>
                            </div>  <!-- End of Sixth row -->
                            
                             
                                 </div>
                            
                            
                        </div>
                        </form>    
                    </div>
                    
                </div>
            </div>
            <div id="foot" style="text-align: center"> 
            <?php include '../common/footer.php'; ?>
            </div>
            
        </div>
    </body>
</html>
