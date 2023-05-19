<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <header>
        <h1>NAKASEKE HEALTH CENTER IV, NAKASEKE DISTRICT</h1>
        <nav>
            <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a href="registration.php">Register</a></li>
                
            </ul>
        </nav>
    </header>

    <div class="content">
        <h1>Login</h1>
        <form action="logserver.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <a href="registration.php">New? Register</a><br>
            <input type="submit" value="Login" name="login">
        </form>
    </div>
</body>
</html>
