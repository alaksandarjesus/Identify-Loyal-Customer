<?php
include('common.php');
$output = $db->get('*','users','username = ? && password = ?', array($_POST['username'],$_POST['password']));
if($output && is_array($output)){
    session_start();
    $db->update('users','loginCount = loginCount+1, lastVisited = ?','userid = ?',array($date,$output[0]['userid']));
    $_SESSION['user']=$output[0];
    header('location:../../'.$_SESSION['user']['role'].'/');
}
else{
        header('location:../../login.php?status=error');

};