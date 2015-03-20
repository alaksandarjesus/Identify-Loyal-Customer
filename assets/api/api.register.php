<?php
include('common.php');
$_POST['createdOn']=$date;
unset($_POST['repeatpassword']);
$uniqueUserName = $db->get('*','users','username = ?', array($_POST['username']));

if(!$uniqueUserName){
    $output = $db->insert('users',$_POST);    
header('location:../../login.php?status=success');
}
else{

header('location:../../register.php?status=error');
};
