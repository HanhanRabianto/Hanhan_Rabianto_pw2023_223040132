<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>register form</title>
</head>
<body>

<div class="form-container">

<form action="" method="post">
    <h3>Register</h3>
    <input type="text" name="name" required placeholder="enter your name">
    <input type="email" name="email" required placeholder="enter your email">
    <input type="password" name="password" required placeholder="enter password">
    <input type="password" name="password" required placeholder="enter password">
    <select name="user_type">
        <option value="user">user</option>
        <option value="admin">admin</option>
    </select>
    <input type="submit" name="submit" value="register now" class="form-btn">
    <p>already have an account? <a href="login_form.php">login now</a></p> 
</form>
</div>
    
</body>
</html>