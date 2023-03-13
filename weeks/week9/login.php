<?php
include('server.php');
// include(./includes/header.php);
?>

<h1>Login Page</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
    <fieldset>
        <label>Username</label>
        <input type="text" name="username" value="<?php if(isset($_POST['username'])) echo htmlspecialchars($_POST['username']); ?>">

        <label>Password</label>
        <input type="password" name="password">

        <button type="submit" class="btn" name="login_user">Login</button>

        <button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>'">Reset</button>

        <?php include('errors.php') ?>
    </fieldset>
</form>

<p>Haven't registered? Please visit our <a href="register.php">Registration Page</a></p>