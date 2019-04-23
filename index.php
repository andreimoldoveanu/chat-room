<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>

    <title>Collegati per amministrare il sito - <?php echo $sito_internet ?></title>

    <!--some css found online-->
    <link href="css/admin.css" rel="stylesheet" type="text/css" />

</head>
<body>

    <form id="login" action="verification.php" method="post">
        <fieldset id="inputs">
            <input id="username" name="username" type="text" placeholder="Username" autofocus required>
            <input id="password" name="password" type="password" placeholder="Password" required>
        </fieldset>
        <fieldset id="actions">
            <input type="submit" id="submit" value="Connect">
            <a href="../registerForm.php" id="back">Register</a>
        </fieldset>
    </form>

</body>
</html>
