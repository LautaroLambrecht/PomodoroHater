<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
         div {
            display: flex;
            flex-direction: row;
            justify-self: center;
            margin-top: 180px;
        }
        button{
            display: flex;
            margin-top: 5px;
            width: 120px;
            justify-self: center;
        }
    </style>
    <title>HomeONG</title>
</head>
<body>
    
    <?php

    $users = ["Admin" => "1234"];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user = $_POST["user"];
        $pass = $_POST["pass"];
        $validUser = false;

        foreach ($users as $clave => $valor){
            if ($user == $clave && $pass == $valor){
                $validUser = true;
                $_SESSION['admin_user'] = [
                    'username' => $user,
                    'role' => 'admin'];
                break;
            }
        }

        if ($validUser){
            echo '<div>';
            echo "Bienvenido " . $user . "<br>";
            echo "Que queres hacer hoy?<br>";
            echo '</div>';
            echo '<button onclick="window.location.href=\'seaStatistics.php\'">Metrica de maritimas</button>';
            echo '<button onclick="window.location.href=\'howManyFood.php\'">Recaudaciones</button>';
        }
    }

    ?>
</body>
</html>
