<?php require 'views/header.php'; ?>

<h1>Login</h1>
<form action="login/run" method="post">
    <label>login</label><input type="text" name="login"><br />
    <label>Password</label><input type="password" name="password"><br />
    <label></label><input type="submit">
</form>

<?php require 'views/footer.php'; ?>