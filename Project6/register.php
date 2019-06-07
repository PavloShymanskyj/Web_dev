<?php require_once("includes/connection.php"); ?>

<?php include("includes/header.php"); ?>

<?php
if(isset($_POST["register"])){
    if(!empty($_POST['full_name']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password'])) {
        $full_name=$_POST['full_name'];
        $email=$_POST['email'];
        $username=$_POST['username'];
        $password=$_POST['password'];	
        $query=mysqli_query($con,"SELECT * FROM compTable WHERE username='".$username."'");
        $numrows=mysqli_num_rows($query);
        if($numrows==0)
        {
            $sql="INSERT INTO compTable
                    (name, email, username,password) 
                    VALUES('$full_name','$email', '$username', '$password')";

            $result=mysqli_query($con,$sql);

            if($result){
             $message = "Акаунт успішно створений";
            } else {
             $message = "Неможливо додати інформацію!";
            }
        } else {
         $message = "Дане ім'я користувача уже існує! Спробуйте будь ласка інше";
        }

    } else {
         $message = "Заповніть усі поля!";
    }
}
?>

<div class="container mregister">
    <div id="login">
        <h1>Реєстрація</h1>
        <form name="registerform" id="registerform" action="register.php" method="post">
            <p>
                <label>Повне ім'я<br>
                    <input type="text" name="full_name" id="full_name" class="input"  value="">
                </label>
            </p>
            <p>
                <label>Електронна пошта<br>
                    <input type="email" name="email" id="email" class="input" value="">
                </label>
            </p>

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
                <input type="submit" name="register" id="register" class="button" value="Зареєструватися" />
            </p>
            <p class="regtext">Вже маєте акаунт? <a href="login.php">Увійдіть тут</a>!</p>
        </form>

    </div>
</div>

<?php if (!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ". $message . "</p>";} ?>
<?php include("includes/bodyend.php"); ?>


