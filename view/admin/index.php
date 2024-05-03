<!doctype html>
<?php include("actions/connect.php"); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS LIBRARIES -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- FONTS -->
    <link rel="stylesheet" type="text/css" href="../css/fonts/bootstrap-icons.woff"/>
    <link rel="stylesheet" type="text/css" href="../css/fonts/bootstrap-icons.woff2"/>
    <link rel="stylesheet" href="../css/bootstrap-icons.min.css">
    <title>ADMIN | Seniorencentrum OLV.</title>
    <style>
        body {
            background-color: #f9f9f9;
        }
        .login-container {
            max-width: 400px;
            margin: 100px auto;
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        .login-container h2 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }
        .login-container .input-group-text {
            background-color: #67BB87;
            border-color: #67BB87;
            color: #fff;
        }
        .login-container .input-group-text i {
            color: #fff;
        }
        .login-container button {
            background-color: #67BB87;
            border-color: #67BB87;
        }
        .login-container button:hover {
            background-color: #5ca67b;
            border-color: #5ca67b;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="login-container">
                <h2 class="mb-4">Admin-zone</h2>
                <form id="login-form" action="actions/login.php" method="POST">
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Gebruikersnaam" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Wachtwoord" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Inloggen</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>