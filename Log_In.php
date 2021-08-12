<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/log_in.css?v=<?php echo time(); ?>">
    <link rel="icon" href="img/logo.jpg" type="image/icon type">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <img src="img/login1.svg" alt="" class="login1_image">
    <img src="img/login2.svg" alt="" class="login2_image">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <div class="Login">
        <h1>Sign In</h1>
        <form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF'] ); ?>">
            <div class="txt_field">
                <input type="text" required placeholder="Username or Email" name="username">
            </div>
            <div class="txt_field">
                <input type="password" required placeholder="Password" name="paswd" id="password">
                <span><i class="fa fa-eye" id="show" aria-hidden="true" onclick="toggle()"></i></span>
                <span><i class="fa fa-eye-slash" id="hide" aria-hidden="true" onclick="toggle()"></i></span>
            </div>
            <script>
                var state = false;
                function toggle(){
                    if(state){
                        document.getElementById("password").setAttribute("type","password");
                        document.getElementById("show").style.display = "none";
                        document.getElementById("hide").style.display = "inline-block";
                        state = false;
                    }
                    else{
                        document.getElementById("password").setAttribute("type","text");
                        document.getElementById("show").style.display = "inline-block";
                        document.getElementById("hide").style.display = "none";
                        state = true;
                    }
                }
            </script>
            <div class="pass">Forgot Password?</div>
            <input type="submit" value="Log In" name="login">
            <div class="signup_link">Don't have an account? <a href="./Sign_Up.php">Sign Up</a>
            </div>
        </form>
    </div>
    

</body>
</html>

<?php

include 'connection.php';
if(isset($_POST['login'])){
	$name =mysqli_real_escape_string($con, $_POST['username']);
	$paswd =mysqli_real_escape_string($con, $_POST['paswd']);

    $username_search = "select * from signup where username= '$name' ";
    $query = mysqli_query($con,$username_search);

    $username_count = mysqli_num_rows($query);
    if($username_count){
        $username_password = mysqli_fetch_assoc($query);
        $db_pass = $username_password['password'];
        $_SESSION['username'] = $username_password['username'];
        $password_decode = password_verify($paswd , $db_pass);
        if($password_decode){
            ?>
            <script>
                alert("***Welcome to Sasta Medicine***"); 
                location.replace("index.php");
            </script>
            <?php
        }
        else{
            ?>
            <script>
                alert("Incorrect Password!"); 
            </script>
            <?php
        }
    }
    else{
        ?>
        <script>
            alert("Incorrect Username or Email Id!"); 
        </script>
        <?php
    }
}

?>