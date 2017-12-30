<?php
    
        if(($_POST['username'] == 'admin') && ($_POST['password'] == 'abc123') ){
            header("Location: welcome.html");
        }
        else{
            die("incorrect username or password!");
        }

?>

