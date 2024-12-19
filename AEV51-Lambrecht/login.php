<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        form{
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin: auto;
            margin-top: 180px;
            width: 180px;
        }
        label{
            margin-bottom: 5px;
        }
        .submit{
            margin-top: 5px;
            display: flex;
            align-self: end;
            width: 70px;
        }
    </style>
    <title>Login ONG</title>
</head>
<body>
    <form action="homeONG.php" method="post">
        <label for="user">User</label>
        <input type="text" name="user" id="user" placeholder="Admin">
        <label for="password">Password</label>
        <input type="password" name="pass" id="pass" placeholder="1234">
        <input class = "submit" type="submit" value="Enviar">
    </form>
</body>
</html>