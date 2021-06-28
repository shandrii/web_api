<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <title>BTC to UAH rate</title>
    <link rel="stylesheet" href="styles.css" />
</head>
<body>
<main>
<h2 style="text-shadow:#cccccc -17px -8px 6px">Log in form</h2>
        <form id='login_form' action="login_validation.php" method="post">

        <div class="form-group">
            <label for="username"><b><h3>Username:</h3></b></tab></label>
            <input placeholder="Enter your username..." type="text" name="username" id="username" required />
        </div>
        <div class='bad'>
        <?php if (isset($username_error)) { ?>
            <p><?php echo $username_error ?></p>
        <?php } ?>
        </div>

            <div class="form-group">
            <label for="email"><b><h3>Email:</h3></b></label>
            <input placeholder="Enter your email..." type="email" name="email" id="email" required />
        </div>
        <div class='bad'>
        <?php if (isset($email_error)) { ?>
            <p><?php echo $email_error ?></p>
        <?php } ?>
        </div>

        <div class="form-group">
            <label for="password"><b><h3>Password:</h3></b></label>
            <input placeholder="Enter your password..." type="password" name="password" id="password" required />
        </div>
        <div class='bad'>
        <?php if (isset($password_error)) { ?>
            <p><?php echo $password_error ?></p>
        <?php } ?>
        </div>
            <button type='submit' class="butt">Log in</button>
        </form>
</main>
</body>