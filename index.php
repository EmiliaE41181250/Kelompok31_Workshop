<?php
session_start();
include "base.php";
if (empty($_SESSION['user']) AND empty($_SESSION['pass'])){
    include 'login.php';
}else{
    include 'admin.php';
}