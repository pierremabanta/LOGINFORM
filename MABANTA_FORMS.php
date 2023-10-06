<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Mabanta.css">
    <title>Document</title>
</head>
<body>
 <form action="login.php" method="post">
    <center><img src="account.jpg" width="50%"></center>
        <h2>Login Form:</h2>

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <label>User Name: </label>
            <br>

        <input type="text" name="uname" placeholder="User Name"><br>
            <br>
        <label>Password: </label>
            <br>
        <input type="password" name="password" placeholder="Password"><br> 
            <br> 
        <button type="submit">Login</button>

     </form>
</body>
</html>