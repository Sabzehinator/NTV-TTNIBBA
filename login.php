<!DOCTYPE html>
<html lang = "sv">

<head>
<title> Login Sida</title>
<link rel="stylesheet" type="text/css" href="stylelogin.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body <body style="background-image: url(https://www.centralabygg.com/siteassets/regional-assets/emea/centrala-bygg-sweden/buying-guides/tvattmaskiner/washingmachines-electrolux-side-by-side-2400x1800.jpg)">
    <form action="process.php" id="login" method="POST">
        <h3 class="text-body text-center text-white pt-5"></h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">        
                                <input type="submit" name="login" class="btn btn-info btn-md" value="Login">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>

<?php


?>










 


