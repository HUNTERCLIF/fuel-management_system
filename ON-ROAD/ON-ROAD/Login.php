<!DOCTYPE html>
<html>
<head>
  <title>Sign In</title>
</head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="login.php">
<body>
  <style>
  body {
    font-family: Arial, sans-serif;
    background-image: url(images.jpeg);
    background-repeat: no-repeat;
    background-size: cover;
    padding: 20px;
  }
  h1{
    color:black;
  }
  
  h2 {
    color: #333333;
  }
  
  form {
    max-width: 400px;
    margin: 0 auto;
    background-color: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }
  
  label {
    display: block;
    margin-bottom: 10px;
    color: #333;
  }
  
  input[type="text"],
  input[type="password"] {
    width: 70%;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 5px;
    border: 1px solid #16aaaf;
  }
  
  input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    cursor: pointer;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
  }
  
  input[type="submit"]:hover {
    background-color: #45a049;
  }
  
  p {
    margin-top: 10px;
    color:blue;
  }
  
  a {
    color:#4CAF50;
    text-decoration: none;
  }
  
  a:hover {
    text-decoration: underline;
  }

  .form-container {
      display: flex;
      justify-content: space-between;
    }

    .form-container form {
      width: 48%;
    }
</style>
<body>
 <h1>ON-ROAD FUEL DEMAND SYSTEM</h1>
  <form id="signInForm" action="process_login.php" method="POST">
    <h2>Sign In</h2>
    <label for="username"><i class="fa-solid fa-user"></i> Username :</label>
    <input type="text" id="username" name="username" placeholder="username" required>
    <label for="password"><i class="fa-solid fa-lock"></i> Password:</label>
    <input type="password" id="password" name="password" placeholder="password" required><br><br>
    

    <div class="remember-me">
      <input type="checkbox" id="rememberMe" name="rememberMe">
      <label for="rememberMe">Remember Me</label>
      <i class="fi fi-rs-check-circle"></i>
    </div>  

    <input type="submit" value="Log In"> 
    <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
    <p>Forgot your password? <a href="password_recovery.php">Remember Me </a></p>

  </form>
  <script>
    function login(event) {
      event.preventDefault();
      var usernameOrEmail = document.getElementById("usernameOrEmail").value;
      var password = document.getElementById("password").value;

      if (usernameOrEmail === "Admin/admin5@gmail.com" && password === "Admin12345") {
        
      } else {
        alert("Invalid username or password. Please try again.");
      }
    }
 </script>
</body>
</html>
