<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Score Register</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='styles/style.css'>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src='main.js'></script>
</head>

<body>

    <!-- LOGIN -->

    <div class="login">
        <h1><strong>WELCOME TO THE SCORE REGISTER</strong> </h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pretium nulla vitae felis rutrum consequat. Duis a nunc quis mi maximus tristique nec eget turpis. Ut faucibus diam ut erat tristique, sit amet lobortis nulla sagittis.
        </p>
        <form class="controles" action="controllers/login.php" method="GET">
            <input id="username" type="text" name="username" placeholder="Username" required>
            <input id="password" type="password" name="password" placeholder="Password" required>
            <p><a href="#" target="blanco">Forgot your password</a></p>
            <input type="submit" value="Login" id="login">
    </form>
    </div>

    <!-- SIGN UP -->
    <div class="signup">
        <h1>Profile Register</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu diam vitae urna imperdiet maximus sed eu nibh. Donec ac dapibus metus. Sed eget massa et purus maximus sodales id eu purus.
        </p>
        <form class="controls" action="controllers/registrar.php" method="POST">
            <input type="text" name="username" id="username" placeholder="Username" require>

            <input type="password" name="password" id="password" placeholder="Password" require>

            <input type="text" name="classname" id="classname" placeholder="Class Name" require>

            <input type="number" name="level" id="level" placeholder="Level" require>

            <input type="submit" value="sign up" id="button-sign">

        </form>
    </div>

</body>

</html>