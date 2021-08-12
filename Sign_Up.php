<?php

session_start();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/sign_up.css?v=<?php echo time(); ?>">
    <link rel="icon" href="img/logo.jpg" type="image/icon type">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <img src="img/signup1.svg" alt="" class="signup1_image">
    <img src="img/signup2.svg" alt="" class="signup2_image">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



    <div class="Login">
    <h1>Sign Up</h1>
        <form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF'] ); ?>" >

            <div class="txt_field">
                <input type="text" required placeholder="First name" name="fname">
            </div>

            <div class="txt_field">
                <input type="text" required placeholder="Last name" name="lname">
            </div>
            <div class="Gender">
                &nbsp;&nbsp;&nbsp;&nbsp;Gender :
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" required name="inlineRadioOptions" id="inlineRadio1" value="Male" >
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                </div>
            

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Female">
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="Others">
                    <label class="form-check-label" for="inlineRadio3">Others</label>
                </div>
            </div>    

            <div class="txt_field">
                <input type="tel" required placeholder="Phone number" name="phn">
            </div>

            <div class="txt_field">
                <input type="text" required placeholder="Username or Email" name="user">
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

            <div class="txt_field">
                <input type="password" required placeholder="Confirm Password" name="cpswd">
            </div>

            <input type="submit" value="Sign Up" name="signup" >
            <div class="signup_link">Already have an account? <a href="./Log_In.php">Sign In</a>
            </div>
        </form>
    </div>
    

</body>
</html>

<?php

include 'connection.php';
if(isset($_POST['signup'])){
	$firstname = mysqli_real_escape_string($con,$_POST['fname']);
	$lastname = mysqli_real_escape_string($con,$_POST['lname']);
    $gender = mysqli_real_escape_string($con,$_POST['inlineRadioOptions']);
    $phonenumber = mysqli_real_escape_string($con,$_POST['phn']);
    $username = mysqli_real_escape_string($con,$_POST['user']);
    $password = mysqli_real_escape_string($con,$_POST['paswd']);
    $confirmpassword = mysqli_real_escape_string($con,$_POST['cpswd']);

    $passwd = password_hash($password, PASSWORD_BCRYPT);
    $cpasswd = password_hash($confirmpassword, PASSWORD_BCRYPT);

    $username_search = "select * from signup where username= '$username' ";
    $query = mysqli_query($con,$username_search);
    $username_count = mysqli_num_rows($query);
    if($username_count){
        ?>
        <script>
            alert("Username or Email Id already Exists!"); 
        </script>
        <?php
    }else{

        if($password===$confirmpassword){
            $insertquery = " INSERT INTO `signup`(`firstname`, `lastname`, `gender`, `phone`, `username`, `password`, `confirmpassword`) VALUES ('$firstname','$lastname','$gender','$phonenumber','$username','$passwd','$cpasswd')";
            $notify = mysqli_query($con,$insertquery);
            if($notify){
            ?>
            <script>
                alert("Successfully registered!");
            </script>
            
            <?php
            }
        }
        else{
            ?>
            <script>
                alert("Password and Confirm Password are different"); 
            </script>
            <?php
        }

    }
}
    
?>
