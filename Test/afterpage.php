<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="utf-8">
    <title>Найпопулярніші композитори</title>
    <link href="css/login_style1.css" rel="stylesheet">
</head>
<body style="background-image: url(gamepad.jpg);">

<?php 
    session_start();
    if(!isset($_SESSION["session_username"])) {
        header("location:login.php");
    }
?>


<div id="welcome">
    <h2>Привіт, <span><?php echo $_SESSION['session_username'];?> </span>!</h2>
    <div>
        <?php 
            if($_SESSION["session_username"]=='administrator'){
                 include("includes/usertable.php");
            }
        ?>
    </div>
</div>

<?php include("includes/bodyend.php");
      include("index.php"); ?>
