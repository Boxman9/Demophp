<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p style="background-color: red;color:aliceblue"><?php echo $_GET ["Error"] password Mismatch</p>
<p style="background-color: green;color:aliceblue "> Regristration Success!</p>
    <form action="output.php" method="POST">
<div>
<label for="username"> Username</label>
<input type="text" name="username" id="username">
</div>

<div>
<label for="email"> email</label>
<input type="email" name="email" id="email">
</div>

<div>
<label for="password"> password</label>
<input type="password" name="password" id="password">
</div>

<div>
<label for="confirm-password"> password</label>
<input type="password" name="confirm-password" id="confirm-password">
</div>

<div>
<input type="submit" value="Submit">
</div>


    </form>

</body>
</html>