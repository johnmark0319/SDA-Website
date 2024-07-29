<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDA-Admin</title>
    <link rel="icon" href="images\SDALOGO.png" type="image/png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="admin.css">
</head>

<body>

    <div class="container" id="login">

        <h1 class="login-title">Log In</h1>

        <form method="post" action="login.php">

            <div class="input-group">

                <i class="fas fa-user"></i>
                <input type="text" name="email" id="email" placeholder="Email" required>

            </div>

            <div class="input-group">

                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password" required>

            </div>

            <input type="submit" class="btn" value="login" name="log">

        </form>

    </div>

</body>

</html>