<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>loginpage </title>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script><link rel="stylesheet" href="loginstyle.css">
</head>
<body>
<!-- partial:index.partial.html -->
<body background="pexels-kateryna-babaieva-3361235.jpg">
    <section>
        <form action="serverlogin.php" method="post">
            <?php include('errors.php'); ?>
            <h1>Login</h1>
            <div class="inputbox">
                <ion-icon name="mail-outline"></ion-icon>
                <input type="text" required>
                <label for="">Username</label>
            </div>
            <div class="inputbox">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input type="password" required>
                <label for="">Password</label>
            </div>
            <div class="forget">
                <label for=""><input type="checkbox">Remember Me</label>
              <a href="forgotpasswrd.php">Forget Password</a>
            </div>
            <button>Log in</button>
            <div class="register">
                <p>Don't have a account <a href="register.php">Register</a></p>
            </div>
        </form>
    </section>
</body>
<!-- partial -->
  
</body>
</html>
