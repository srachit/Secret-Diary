<?php
    if($_POST['submit'])
    {
        if(!$_POST['email'])
        {
            $error.= "<br /> Please Enter Your Email";
        }
        else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
        {
            $error.= "<br /> Please enter a valid email address";
        }
        if(!$_POST['password'])
        {
            $error.="<br /> Please enter a password";
        }
        else
        {
            if(strlen($_POST['password'])<8)
            {
                $error.="<br/> Please enter a password with atleast 8 characters";
            }
            if(!preg_match('`[A-Z]`', $_POST['password']))
            {
                $error.="<br/> Please include atleast one capital letter in your password";
            }
        }
        if($error)
        {
            echo "There were error(s) in your sign up details ".$error;
        }
        else
        {
            $link = mysqli_connect("localhost", "cl41-example", "9cVE4-7z-", "cl41-example");
            $query = "SELECT * FROM users WHERE email='".mysqli_real_escape_string($link, $_POST['email'])."'";

            $result = mysqli_query($link, $query);
            $results = mysqli_num_rows($result);
            if($results)
            {
                echo    "That email address is already registered. Do you want to login?";
            }
            else
            {
                $query = "INSERT INTO `users` (`email`, `password`) VALUES('".mysqli_real_escape_string($link,
                        $_POST['email'])."','".md5(md5($_POST['email'].$_POST['password']))."')";

                mysqli_query($link, $query);

                echo    "You've been signed up";
            }
        }
    }

?>


<form method="post">
    <input type="email" name="email" id="email" />
    <input type="password" name="password" />
    <input type="submit" name="submit" value="Sign Up" />
</form>