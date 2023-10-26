<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & signup Form</title>
    <link rel="stylesheet" href="sl.css"/>
</head>
<body class="LogSignIn-body">
    <div class="description">
    <h1>RewriteWizard</h1>
      <p>Sign up to explore the best writing experience</p>
    </div>
    <section class="wrapper">
      
        <!-- Signup Form -->
        <div class="form signup">
          <header>Signup</header>
          <form action="signup.php" method="post" id="signup" novalidate>
            <input type="text" name="name" placeholder="Full name" required />
            <input type="email"name="email" placeholder="Email address" required />
            <input type="password" name="password" placeholder="Password" required />
            <div class="checkbox">
              <input type="checkbox" id="signupCheck" />
              <label for="signupCheck">I accept all terms & conditions</label>
            </div>
            <input type="submit" value="Signup" />
          </form>
        </div>
        
        <!-- Login Form -->
        <div class="form login">
          <header>Login</header>
          <?php if ($is_invalid): ?>
             <em>Invalid login</em>
          <?php endif; ?>
          <form action="login.php" method="post">
            <input type="email" name="email" placeholder="Email address" required />
            <input type="password" name ="password" placeholder="Password" required 
            value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
            <a href="#">Forgot password?</a>
            <input type="submit" value="Login" />
          </form>
        </div>
        
        <!-- JavaScript code -->
        <script src="LogSignIn.js"></script>
    </section>
</body>
</html>
