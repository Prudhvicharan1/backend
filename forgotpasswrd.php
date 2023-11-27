<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>forgot password</title>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script><link rel="stylesheet" href="loginstyle.css.css">
</head>
<body>
<!-- partial:index.partial.html -->
<body background="pexels-kateryna-babaieva-3361235.jpg">
    <link rel="stylesheet" href="loginstyle.css">
    <section>
        <form action="forgotpassword.php" method="post">
            <h1>Reset password</h1>
            <center><p>Enter your registered mail id</p>
            <p id="fgpswdpara">An mail with an reset link will be sent to your mail id</p></center>

            <div class="inputbox">
                <ion-icon name="mail-outline"></ion-icon>
                <input type="email" required>
                <label for="enter your register mail id">Email</label>
            </div>
            <button>Send mail</button>
            <div class="register"></div>
            </div>
        </form>
    </section>
</body>
<!-- partial -->
  
</body>
</html>
