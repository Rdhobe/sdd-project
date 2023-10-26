
<?php

session_start();
$showError=false;
if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        include 'db_connect.php';
        $username = $_POST["username"];
        $password = $_POST["password"];
    
        $sql = "Select * from `user data` where username='$username' AND password='$password'";
        $result =mysqli_query($conn ,$sql);
        $num =mysqli_num_rows($result);
            if($num==1)
                {
                    $showError=false;
                    session_start();
                    $_SESSION['loggedin']=true;
                    $_SESSION['username']=$username;
                    header("location: index.php");
                }
        
        else{
                $showError ="Invalid Credentials";
            }

    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/brands.min.css"
        integrity="sha512-W/zrbCncQnky/EzL+/AYwTtosvrM+YG/V6piQLSe2HuKS6cmbw89kjYkp3tWFn1dkWV7L1ruvJyKbLz73Vlgfg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="import" href="table.html">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <style>
        .loginpage #header-2 .header2 .logo{
            text-align: center;
            margin-top: 30px;
            text-decoration: none;
            cursor: pointer;
            color: #f2f2f2;
        }
        .loginpage #header-2 .header2 .logo a{
            color: aliceblue;
        }

        .login H4{
            font-size: 30px;
            position: relative;
            left: 30px;
            border: 1px solid gold;
            display: inline-block;
            padding: 10px;
            box-shadow: black;
            box-sizing: border-box;
        }
    </style>
</head>

<body class="loginpage">
<?php
        if($showError)
            {
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                <strong>Error!</strong> '.$showError.'
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
            }
   ?>

    <!-- header-section -->

    <section id="header-2">
        <div class="header2">
            <!-- <input type="checkbox" name="" id="chk1"> -->
            <div class="logo">
               <a href="/html code/index.html"> <h1 style="text-align: center;">NewSagar</h1></a>
            </div>
        </div>
    </section>

    <!-- GATHERING-section -->

    <section class="gathering">
        <svg xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
            <path
                d="M388.32,104.1a4.66,4.66,0,0,0-4.4-4c-2,0-37.23-.8-37.23-.8s-21.61-20.82-29.62-28.83V503.2L442.76,472S388.72,106.5,388.32,104.1ZM288.65,70.47a116.67,116.67,0,0,0-7.21-17.61C271,32.85,255.42,22,237,22a15,15,0,0,0-4,.4c-.4-.8-1.2-1.2-1.6-2C223.4,11.63,213,7.63,200.58,8c-24,.8-48,18-67.25,48.83-13.61,21.62-24,48.84-26.82,70.06-27.62,8.4-46.83,14.41-47.23,14.81-14,4.4-14.41,4.8-16,18-1.2,10-38,291.82-38,291.82L307.86,504V65.67a41.66,41.66,0,0,0-4.4.4S297.86,67.67,288.65,70.47ZM233.41,87.69c-16,4.8-33.63,10.4-50.84,15.61,4.8-18.82,14.41-37.63,25.62-50,4.4-4.4,10.41-9.61,17.21-12.81C232.21,54.86,233.81,74.48,233.41,87.69ZM200.58,24.44A27.49,27.49,0,0,1,215,28c-6.4,3.2-12.81,8.41-18.81,14.41-15.21,16.42-26.82,42-31.62,66.45-14.42,4.41-28.83,8.81-42,12.81C131.33,83.28,163.75,25.24,200.58,24.44ZM154.15,244.61c1.6,25.61,69.25,31.22,73.25,91.66,2.8,47.64-25.22,80.06-65.65,82.47-48.83,3.2-75.65-25.62-75.65-25.62l10.4-44s26.82,20.42,48.44,18.82c14-.8,19.22-12.41,18.81-20.42-2-33.62-57.24-31.62-60.84-86.86-3.2-46.44,27.22-93.27,94.47-97.68,26-1.6,39.23,4.81,39.23,4.81L221.4,225.39s-17.21-8-37.63-6.4C154.15,221,153.75,239.8,154.15,244.61ZM249.42,82.88c0-12-1.6-29.22-7.21-43.63,18.42,3.6,27.22,24,31.23,36.43Q262.63,78.68,249.42,82.88Z" />
        </svg>
        <div class="welcome">
            <h1>WELCOME TO</h1>
            <h3>NEW SAGER MOBILE AND ELECTRINICS</h3>
        </div>
    </section>

    <!-- LOGIN-section -->

       <!-- <h4>LOGIN</h4>
       <div class="details"> -->
         <!-- <p> <strong>FULL NAME</strong></p>
                 <input type="text" name="" id="" placeholder="ENTER YOUR FULL NAME"> -->
                 <!-- <p> <strong>EMAIL ID</strong></p>
                 <input type="text" name="" id="" placeholder="ENTER YOUR GMAIL ID">
                 <p> <strong>PASSWORD</strong></p>
                 <input type="password" name="" id="" placeholder="ENTER YOUR PASSWORD"> -->
                <!-- <p> <strong>CONFIRM PASSWORD</strong></p>
            <input type="password" name="" id="" placeholder="CONFIRM YOUR PASSWORD"> -->
           <!-- </div>
           <div class="loginbutton">
                   <a href="/html code/login.php"><button id="login">LOGIN</button></a>
                      <a href="/html code/signup.php"><button id="signup">SIGN_UP</button></a>
               </div>
                     -->
              
    <section class="login" id="">
        <div class="details">
            <h4>LOGIN</h4>
            <form method="post">
                <!-- <div class="txt_field">
                    <label ><strong>FULL NAME</strong></label>
                    <input type="text"  placeholder="ENTER YOUR FULL NAME" required>
                    <span></span>
                </div> -->
                <div class="txt_field">
                    <label ><strong>EMAIL ID</strong></label>
                    <input type="text" name="username" id=""  placeholder="ENTER YOUR GMAIL ID" required>
                    <span></span>
                </div>
                <div class="txt_field">
                    <label ><strong>PASSWORD</strong></label>
                    <input type="password" name="password" id=""  placeholder="ENTER YOUR PASSWORD" required>
            <span></span>
            </div>
            <!-- <div class="pass">Forgot password?</div> -->
            <div class="loginbutton">
                <a href="/html code/login.php"><button id="login">LOGIN</button></a>
                
            </form>
            </div>
        <div class="loginbutton">
           
            <a href="signup.php"><button id="signup">SIGN_UP</button></a>
        </div>
    </section>


    <!-- footer-section -->

    
</body>

</html>
