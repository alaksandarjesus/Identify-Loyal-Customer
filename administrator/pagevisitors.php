<?php
    
    include('header.php');
    include('menu.php');
    include('../assets/api/common.php');
    $output = $db->getwithsql("SELECT clickcounts.*, users.* FROM clickcounts INNER JOIN users ON users.userid = clickcounts.userid");

?>

<div class="container">

    <div class="row">
        <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3">
           <p> <button class="btn btn-primary btn-block" id="showhideoptions">Show / Hide Options</button></p>
            <div  class="col-md-6 col-lg-6 options">
            <div class="panel panel-default">
                <div class="panel-heading">Show Columns</div>
                    <div class="panel-body optioncolumns">
                        <ul id="showcolumns">
                                <li>Username</li>
                                <li>Role</li>
                                <li>Password</li>
                                <li>First Name</li>
                                <li>Last Name</li>
                                <li>Gender</li>
                                <li>Email</li>
                                <li>House Type</li>
                                <li>Job Type</li>
                                <li>Created On</li>
                                <li>Login Count</li>
                                <li>Last Login</li>
                                <li>Page</li>
                                <li>Loyal</li>
                                <li>Click Count</li>
                                <li>Last Visited</li>
                        </ul>
                    </div>
                </div>
            </div>
             <div  class="col-md-6 col-lg-6 options">
            <div class="panel panel-default">
                <div class="panel-heading">Hide Columns</div>
                    <div class="panel-body optioncolumns">
                        <ul id="hidecolumns">
                                
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
<div class="row">
<table id="pagecount" class="table table-striped table-bordered" cellspacing="0">
        <thead>
            <tr>
                <th>Username</th>
                <th>Role</th>
                <th>Password</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Email</th>
                <th>House Type</th>
                <th>Job Type</th>
                <th>Created On</th>
                <th>Login Count</th>
                <th>Last Login</th>
                <th>Page</th>
                <th>Loyal</th>
                <th>Click Count</th>
                <th>Last Visited</th>
            </tr>
        </thead>
 
        <tbody>
            <?php foreach($output as $user){?>
                <tr>
                    <td><?php echo $user['username']; ?></td>
                    <td><?php echo $user['role']; ?></td>
                    <td><?php echo $user['password']; ?></td>
                    <td><?php echo $user['firstname']; ?></td>
                    <td><?php echo $user['lastname']; ?></td>
                    <td><?php echo $user['gender']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['housetype']; ?></td>
                    <td><?php echo $user['jobtype']; ?></td>
                    <td><?php echo $user['createdOn']; ?></td>
                    <td><?php echo $user['loginCount']; ?></td>
                    <td><?php echo $user['lastVisited']; ?></td>
                    <td><?php echo $user['page']; ?></td>
                    <td><?php echo $user['loyal']?'Loyal':'No'; ?></td>
                    <td><?php echo $user['count']; ?></td>
                    <td><?php echo $user['updatedOn']; ?></td>
                </tr>
            <?php }?>

        </tbody>
    </table>

</div>
</div>


<?php

    include('footer.php');

?>