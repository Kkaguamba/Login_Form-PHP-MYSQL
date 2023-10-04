<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['username'])){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="website icon" type="png" href="images/logo.png">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['name']; ?></h1>
    <a href="logout.php">Logout</a>
</body>
</html>
<?php
}else{
    header("Location: index.php");
    exit();
}?>