

<!DOCTYPE html>
<html lang="en">
<head>
<title>Sign up</title>
<meta charset="UTF-8">
<style>
        .center {
          text-align: center;
        }
        .vertical{
            margin-bottom: 200px;
        }
</style>
</head>
<body>
<div class = "vertical"></div>
<h1 class = "center">MeTube Sign up</h1>

<div class = "center">
<form action="http://MeTube.com/registration/adduser" method="post">
        <p>
        <label for="fullname">Full name:</label>
        <input type="text" name="name" placeholder="Full name..."><BR></BR>
        <label for="email">E-mail</label>
        <input type="text" name="email" placeholder="Email..."><BR></BR>
        <label for="Username">Username</label>
        <input type="text" name="uid" placeholder="Username..."><BR></BR>
        <label for="Pasword">Password</label>
        <input type="password" name="pwd" placeholder="Password..."><BR></BR>
        <label for="email">Re-enter password</label>
        <input type="password" name="pwdrepeat" placeholder="Repeat password..."><BR></BR>
        </p>
        <button type="submit" name="submit">Sign up</button>
</form>
</div>
</body>
</html>
