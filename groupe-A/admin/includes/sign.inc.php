<?php
session_start();
require "conn.inc.php";

if(isset($_POST["signin-submit"])){
$email=$_POST["user_email"];
$pwd=$_POST["user_pwd"];

$sql = "SELECT * FROM users WHERE user_email = '$email'";
$result = $conn->query($sql)->fetch();
if(isset($_POST["signin-submit"])){
    $email=$_POST["user_email"];
    $pwd=$_POST["user_pwd"];

    $sql = "SELECT * FROM users WHERE user_email = '$email'";
    $result = $conn->query($sql)->fetch();
    if($result["user_admin"] == 1){
    if($result === FALSE){
    header("Location:sign.php?set=signin&wrongemail");
    }elseif(md5($pwd) != $result["user_pwd"]){
    header("Location:sign.php?set=signin&wrongpwd");
    }elseif($result["user_validated"] == 0){
    header("Location:sign.php?set=signin&notvalidated");
    }else{
    session_start();
    $_SESSION["token"] = $result["user_token"];
    $_SESSION["isadmin"] = $result["user_admin"];
    header("Location:../../index.php?loggedin");
    }
    }else{
        header("Location:../../index.php");
    }
}elseif(isset($_POST["signup-submit"])){
        
}

}
?>