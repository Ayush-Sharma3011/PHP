<?php
include 'database.php';
if (isset($_post['submit'])){
    $uname = $_post['username'];
    $password = $_post['password'];

    $query = "SELECT * FROM users WHERE username='$uname' AND password='$password'";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($que) >0 ){
        echo " <script>alert('login ok ')</script>";
        echo " <script>window.open('insert.php','_self')</script>";
    }else{
        echo " <script>alert('login failed ')</script>";
        echo " <script>window.open('login.php','_self')</script>";
    }
}