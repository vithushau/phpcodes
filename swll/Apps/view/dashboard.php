
<?php
session_start();

include '../common/dbconnection.php';
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
                            <li class="active">Dashboard</li>
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
                    <div class="col-md-3">
                        <ul>
                        <?php //include '../common/leftside.php'; ?>
                                <?php    
                        include '../model/modulemodel.php';
                        $role_id=$user_info['role_id'];
                        $obm=new module();
                        $rm=$obm->getModuleByRole($role_id);
                        while($rowm=$rm->fetch(PDO::FETCH_BOTH)){
                            $m_name= strtolower($rowm['m_name']);
                            $page=$m_name.".php"; //automatically create specific page as .php
                            ?>
                            <li style="list-style-type: none; padding-bottom: 5px"><a href="../view/<?php echo $page;  ?>">
                            <?php
                                echo $rowm['m_name'];
                            
                                ?>Management
                                </a>
                                    
                               </li>
                               <?php
                        }
                                ?>
                            </ul>
                    </div>
                    <div class="col-md-9">Board</div>
                </div>
            </div>
            <div id="foot" style="text-align: center"> 
            <?php include '../common/footer.php'; ?>
            </div>
            
        </div>
    </body>
</html>
