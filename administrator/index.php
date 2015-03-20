<?php
    
    
    
    include('header.php');
    include('menu.php');

?>

<div class="container">

   <h4>Welcome <?php echo $_SESSION['user']['firstname']." " . $_SESSION['user']['lastname']?></h4>
            
            
            <div class="col-md-4 col-lg-4 col-md-offset-4 col-lg-offset-4">
                <h4>Profile Details</h4>
                <table class="table table-striped table-bordered">
                    <tr><td>First Name</td><td><?php echo $_SESSION['user']['firstname']?></td></tr>
                    <tr><td>Last Name</td><td><?php echo $_SESSION['user']['lastname']?></td></tr>
                    <tr><td>Email</td><td><?php echo $_SESSION['user']['email']?></td></tr>
                    <tr><td>City Name</td><td><?php echo $_SESSION['user']['city']?></td></tr>
                    <tr><td>House Type</td><td><?php echo $_SESSION['user']['housetype']?></td></tr>
                    <tr><td>Job Type Type</td><td><?php echo $_SESSION['user']['jobtype']?></td></tr>
                    <tr><td>Role</td><td><?php echo $_SESSION['user']['role']?></td></tr>
                </table>
            </div>
</div>



<?php

    include('footer.php');

?>