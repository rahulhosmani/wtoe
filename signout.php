<?php
include 'connect.php';
include 'menubar.php';
include 'catbar.php';
    //session_start();
    session_destroy();
    session_start();
    //session_destroy();
    if(isset($_COOKIE['uname']))
    {
         setcookie("uname", 0, time()-3600);
         setcookie("passwd",0, time()-3600);
    }
    //echo '<div style="color:Blue;font-weight:600;">Thank you using WebTechMessageBoard! Visit Again!</div>';
    //echo "<script>window.location='signin.php';</script>";
    echo "<script>window.location='index.php';</script>";
    include 'footer.php';
?>
