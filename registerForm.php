<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <link href="css/admin.css" rel="stylesheet" type="text/css" />
</head>
<body>

    <form id="register" action="register.php" method="post">
        <fieldset id="inputs">
            <input id="username" name="username" type="text" placeholder="Username" autofocus required>
            <input id="password" name="password" type="password" placeholder="Password" required>
        </fieldset>
        <fieldset id="actions">
            <input type="submit" id="submit" value="Register">
            <a href="../index.php" id="back">Go to Login page</a>
        </fieldset>
    </form>

</body>
</html>
