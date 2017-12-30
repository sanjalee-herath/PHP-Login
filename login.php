
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form  method = "POST">

        Username : <input type="text" name ="username"> </input>
        Password : <input type="text" name = "password"> </input>
        <button type= "submit" name = "submit">Login</button>
    
    </form>

    <?php
    if(isset($_POST['submit'])){
        if(($_POST['username'] == 'admin') && ($_POST['password'] == 'abc123') ){
            header("Location: index.php");
        }
        else{
            die("incorrect username or password!");
        }
    }
    ?>
</body>
</html>

