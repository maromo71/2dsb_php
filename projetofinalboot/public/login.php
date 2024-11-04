<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
   
<h1 class="text-center mt-5">Formulário de Login</h1>
    <div class="container mt-5 d-flex justify-content-center">
    
        <form class="form" id="login-form" action="exec_login.php" method="post">
            <label class="form-label" for="username">Username:</label>
            <input class="form-control" type="text" id="username" name="username" required><br>

            <label class="form-label" for="password">Password:</label>
            <input class="form-control" type="password" id="password" name="password" required><br>

            <input class="btn btn-primary" type="submit" value="Login">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>