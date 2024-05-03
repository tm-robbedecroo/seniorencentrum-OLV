<!doctype html>
<?php include("actions/connect.php"); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN | Seniorencentrum OLV.</title>
</head>
<body>

    <form method="post" action="actions/login.php">
        <input type="text" name="username" placeholder="Gebruikersnaam">
        <input type="password" name="password" placeholder="Wachtwoord">
        <input type="submit" value="Aanmelden">
    </form>

</body>
</html>