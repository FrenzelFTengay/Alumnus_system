<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OpenAI Login</title>
  <link rel="stylesheet" href="{{ asset('css/log_in.css') }}">
</head>
<body>
  <div class="login-container">
    <img src="" alt="" class="logo">
    <form class="login-form">
      <input type="email" placeholder="Email Address" required>
      <input type="password" placeholder="Password" required>
      <a href="{{ url('/design') }}" class="btn">Log In</a>
    </form>
    <div class="social-login">
      <button>Continue with Google</button>
      <button>Continue with Microsoft</button>
    </div>
    <div class="links">
      <a href="#">Forgot Password?</a>
      <a href="#">Sign Up</a>
    </div>
  </div>
</body>
</html>
