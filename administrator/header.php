<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
session_start();
if(!isset($_SESSION['user']) || $_SESSION['user']['role'] != 'administrator'){
    header('location:../login.php');
};

?>


<html>

        <head>
            <title>Housing Loan Project</title>
            <link href="../libs/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet" >
            <link href="../libs/fontawesome/css/font-awesome.css" type="text/css" rel="stylesheet" >
            <link href="../libs/datatables/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" >
            <link href="../assets/css/template.css" type="text/css" rel="stylesheet" >
        </head>
        <body>
            