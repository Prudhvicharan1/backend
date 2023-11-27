<?php include('server.php')?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Registration</title>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script><link rel="stylesheet" href="loginstyle.css">
</head>
<body>
<!-- partial:index.partial.html -->
<body background="pexels-kateryna-babaieva-3361235.jpg">
    <section>
        <form action="serverregister.php" method="post" >
        <?php include('errors.php'); ?>
            <h1>Register</h1>
            <div class="inputbox">
                <ion-icon name="mail-outline"></ion-icon>
                <input type="name" required>
                <label for="">Full name</label>
            </div>
            <div class="inputbox">
                <ion-icon name="mail-outline"></ion-icon>
                <input type="Username" required>
                <label for="">Username</label>
            </div>
            <div class="inputbox">
                <ion-icon name="mail-outline"></ion-icon>
                <input type="email" required>
                <label for="">Email</label>
            </div>
            <div class="inputbox">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input type="password" required>
                <label for="">Password</label>
            </div>
            <div class="inputbox">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input type="confirm password again" required>
                <label for="">Confirm Password</label>
            </div>
            <button>Register now</button>
           
        </form>
    </section>
</body>
<!-- partial -->
  
</body>
</html>
