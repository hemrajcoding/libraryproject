<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="student_login.css">
  <title>Student Login</title>

 
</head>
<body>
  <!-- navigation -->
  <div class="navbar">
    <a href="home.html" class="active">Home</a>
    <a href="book.html" class="nav-link">Book</a>
    <a href="student_login.html" class="nav-link">Login</a>
    <a href="#" class="nav-link">Logout</a>
    <a href="feedback.html" class="nav-link">Feedback List</a>
  </div>



  <!-- index.html -->

    <div class="student_login">
        <form class="login-form1" method="post" action="login.php">
            <h2>Student Login</h2>
            <input type="text" name="username" placeholder="Username" required>
            <input type="text" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
            <p>Not a member? <a href="signup.html">Sign up</a></p>
        </form>
    </div>


</body>
</html>
