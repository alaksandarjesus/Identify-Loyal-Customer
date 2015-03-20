<?php
session_start();
if(isset($_SESSION)){header('location:'.$_SESSION['user']['role']);}
include('header.php');
include('menu.php');



?>

<div class="col-mg-6 col-lg-6 col-md-offset-3 col-lg-offset-3" ng-controller="loginCtrl">
                <div class="panel panel-default">

                    <?php if(isset($_GET['status']) && ($_GET['status']=='error')){?>
                    
                        <div class="alert alert-danger">Username and password does not match</div>
                    
                    <?php };?>
                    
                     <?php if(isset($_GET['status']) && ($_GET['status']=='success')){?>
                    
                        <div class="alert alert-success">Registration Confirmed. You may login now.</div>
                    
                    <?php };?>

            <form class="panel-body" action="assets/api/api.login.php" method="post">
            
                    <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control">
                    
                    </div>
                    <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control">
                    
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-danger pull-right">Login</button>       
                    </div>
            
            </form>
                    </div>
             </div>   


<?php
include('footer.php');
     ?>           
            
                
            
          