<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <form action="login.php" method="post"> <!-- HERE IS THE TRICK -->
        <h2>Login</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"> <?php echo $_GET['error'] ?></p>
        <?php }?>
        <label for="">User name</label>
        <input type="text" name="uname" id="uname" placeholder="User name">
        <label for="">Password</label>
        <input type="text" name="password" id="password" placeholder="Password">
        <button type="submit">Login</button>    
    </form>
</body>
</html>