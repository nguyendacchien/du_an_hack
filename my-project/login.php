<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="js.js"></script>
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="overlay">
    <!-- LOGN IN FORM by Omar Dsoky -->
    <form method="post">
        <!--   con = Container  for items in the form-->
        <div class="con">
            <!--     Start  header Content  -->
            <header class="head-form">
                <h2>Log In</h2>
                <!--     A welcome message or an explanation of the login form -->
                <p>login here using your username and password</p>
            </header>
            <!--     End  header Content  -->
            <br>
            <div class="field-set">

                <!--   user name -->
                <span class="input-item">
           <i class="fa fa-user-circle"></i>
         </span>
                <!--   user name Input-->
                <input class="form-input" id="txt-input" type="text" placeholder="@UserName" name="username" >

                <br>

                <!--   Password -->

                <span class="input-item">
        <i class="fa fa-key"></i>
       </span>
                <!--   Password Input-->
                <input class="form-input" type="password" placeholder="Password" id="pwd"  name="password" >

                <!--      Show/hide password  -->
                <span>
        <i class="fa fa-eye" aria-hidden="true"  type="button" id="eye"></i>
     </span>


                <br>
                <!--        buttons -->
                <!--      button LogIn -->
                <button class="log-in" name="login"> Log In </button>
            </div>

            <!--   other buttons -->
            <div class="other">
                <!--      Forgot Password button-->
                <button class="btn submits frgt-pass">Forgot Password</button>
                <!--     Sign Up button -->
                <button class="btn submits sign-up" name="signup">Sign Up
                    <!--         Sign Up font icon -->
                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                </button>
                <!--      End Other the Division -->
            </div>

            <!--   End Conrainer  -->
        </div>

        <!-- End Form -->
    </form>
</div>

</body>
</html>
<?php
include 'DataUser.php';
include 'User.php';

if (isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    DataUser::login($username, $password);

}
else if(isset($_POST['signup'])){
    header('location: sign-up.php');
}
?>
