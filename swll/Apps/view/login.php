<html>
    <head>
      <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Staff Login</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../plugins/iCheck/square/blue.css">
    <link rel="stylesheet" href="../css/layout.css">  
    <style>
        .loginbg{
            background: url('images/imagebg.png');
        }
        .fontclor{
          
        }
        
    </style>
    </head>
    
    <body class="loginbg">
        
        <div class="login-box">
     <div class="login-logo"> 
         <b style="color:white">Sunwaay Lanka Lab</b>
        </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Log In</p>
        <?php if(isset($_GET['msg'])){ ?>
        <div class="alert alert-danger al">
            <?php echo base64_decode($_GET['msg']); ?>
         </div>  
        <?php } ?>
        <form action="../controller/logincontroller.php" method="post">
          <div class="form-group has-feedback">
            <input name="user_name" type="txt" class="form-control" placeholder="User Name">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
            <div class="form-group has-feedback" >
            <input name="password" type="password" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          
         
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck " style="padding-left: 15px">
                <label>
                  <input type="checkbox"> Remember Me
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Log In</button>
            </div><!-- /.col -->
          </div>
        </form><!-- /.social-auth-links --><br>
      </div><!-- /.login-box-body -->
    </div>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    </body>
        
     
</html>


