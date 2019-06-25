<?php
    session_start();
    if(isset($_SESSION["session_username"])){
        header("Location: afterpage.php");
    }
?>

<?php require_once("includes/connection.php"); ?>
<?php include("includes/header.php"); ?>

<?php
    if(isset($_POST["login"])){
        if(!empty($_POST['username']) && !empty($_POST['password'])) {
            $username=$_POST['username'];
            $password=$_POST['password'];
            $query =mysqli_query($con,"SELECT * FROM compTable WHERE username='".$username."' AND password='".$password."'");
            $numrows=mysqli_num_rows($query);
            if($numrows!=0)
            {
                while($row=mysqli_fetch_assoc($query))
                {
                    $dbusername=$row['username'];
                    $dbpassword=$row['password'];
                }
                if($username == $dbusername && $password == $dbpassword)
                {
                    $_SESSION['session_username']=$username;
                    header("Location: afterpage.php");
                }
            } else {
                $message =  "Неправильне ім'я користувача або пароль!";
            }
        } else {
            $message = "Заповніть усі поля!";
        }
    }
?>

<div class="container mlogin">
    <div id="login">
        <h1>Вхід</h1>
        <form name="loginform" id="loginform" action="" method="POST">
            <p>
                <label>Ім'я користувача<br>
                    <input type="text" name="username" id="username" class="input" value="">
                </label>
            </p>
            <p>
                <label>Пароль<br>
                    <input type="password" name="password" id="password" class="input" value="">
                </label>
            </p>
            <p class="submit">
                <input type="submit" name="login" class="button" value="Увійти" />
            </p>
            <p class="regtext">Ще не зареєстровані? <a href="register.php">Зареєструватися</a>!</p>
        </form>

    </div>

</div>
<?php if (!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ". $message . "</p>";} ?>

<?php include("includes/bodyend.php"); ?>

