<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="login.php" method="post">
        <h2>LOGIN</h2>
        <?php if(isset($_GET['error'])) { ?>
            <p class="error"><?php echo$_GET['error']; ?></p>
            <?php } ?>
        <form method= "POST" action="login.php">
<label for="username">Username</label>
<input type="text" id="username" name="username" placeholder="username...">

<label for="password">Password</label>
<input type="password" id="password" name="password" placeholder="password...">

<button type="submit">Login</button>
</form>
    </form>
</body>
</html>