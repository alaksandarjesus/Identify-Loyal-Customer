<?php

include('header.php');
include('menu.php');

?>

<div class="col-mg-4 col-lg-4 col-md-offset-4 col-lg-offset-4">
                <div class="panel panel-default">
                    
                    <?php if(isset($_GET['status']) && ($_GET['status']=='error')){?>
                    
                        <div class="alert alert-danger">Username taken already. Please try different username.</div>
                    
                    <?php };?>
                    
                    <form data-toggle="validator" name="registerForm" class="panel-body" novalidate method="post" action="assets/api/api.register.php">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Enter username" data-error="required and only alphanumerics" pattern="[a-zA-Z]*$" required>
                             <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter password" id="passwordid" data-minlength="6" maxlength="12" required>
                        <div class="help-block with-errors"></div>
                        </div>
                         <div class="form-group">
                            <label>Retype Password</label>
                            <input type="password" name="repeatpassword" class="form-control" placeholder="Reenter password" data-match="#passwordid" data-match-error="Whoops, these don't match" data-minlength="6" maxlength="12" required>
                             <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="firstname" class="form-control" placeholder="Enter firstname" required>
                                <div class="help-block with-errors"></div>
                            </div>
            

                                  <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="lastname" class="form-control" placeholder="Enter lastname" required>
                                      <div class="help-block with-errors"></div>
                           
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                    <label class="radio-inline">
                                      <input type="radio" name="gender" value="Male" required> Male
                                    </label>
                                    <label class="radio-inline">
                                      <input type="radio" name="gender"  value="Female" required> Female
                                    </label>
                                <div class="help-block with-errors"></div>
                                </div>
                
                                <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control"  placeholder="Enter email address" required>
                                    <div class="help-block with-errors"></div>
                            </div>
                
                            <div class="form-group">
                            <label>Type of house you own</label>
                                <select class="form-control" name="housetype">
                                    <option value="own house">Own house</option>
                                    <option value="rented house">Rented house</option>
                                </select>
                    
                            </div>
                        
                            <div class="form-group">
                            <label>Job Type</label>
                                <select class="form-control" name="jobtype">
                                    <option value="student">Student</option>
                                    <option value="employee">Employee</option>
                                    <option value="managers">Managers</option>
                                    <option value="others">Others</option>
                                </select>
                    
                            </div>
                            <div class="form-group">
                            <label>City</label>
                            <input type="text" name="city" class="form-control" placeholder="Enter city" required>
                            </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-danger pull-right">Register</button>       
                    </div>
            
            </form>
                    </div>
                    
                    

<?php
include('footer.php');
     ?>   
               