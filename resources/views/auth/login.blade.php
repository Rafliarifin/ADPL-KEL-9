<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login - SmartEnergy</title>
  <style>
    html, body {
      margin: 0;
      padding: 0;
      height: 100%;
      font-family: 'Segoe UI', sans-serif;
    }

    body {
      background: url('/images/bg-login.png') no-repeat center center fixed;
      background-size: cover;
    }

    .header-logo {
      position: absolute;
      top: 20px;
      left: 30px;
      color: white;
      font-weight: bold;
      font-size: 20px;
      display: flex;
      align-items: center;
      gap: 10px;
      z-index: 10;
    }

    .header-logo img {
      height: 30px;
    }

    .login-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100%;
    }

    .login-card {
      background-color: rgba(0, 0, 0, 0.6);
      padding: 40px;
      border-radius: 15px;
      color: white;
      width: 350px;
      animation: fadeIn 1s ease-in-out;
      box-shadow: 0 4px 15px rgba(0,0,0,0.4);
    }

    .login-card h2 {
      text-align: center;
      margin-bottom: 30px;
    }

    input[type="email"], input[type="password"] {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: none;
      border-radius: 8px;
      background-color: #333;
      color: white;
    }

    button {
      width: 100%;
      padding: 12px;
      margin-top: 20px;
      border: none;
      border-radius: 8px;
      background-color: #007bff;
      color: white;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #0056b3;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>
  <div class="header-logo">
    <img src="/images/logo.png" alt="Logo">
    <span>SMART ENERGY</span>
  </div>

  <div class="login-container">
    <div class="login-card">
      <h2>Login</h2>
      <form method="POST" action="{{ route('login') }}">
        @csrf
        <input type="email" name="email" placeholder="Email" required autofocus>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
      </form>
    </div>
  </div>
</body>
</html>
