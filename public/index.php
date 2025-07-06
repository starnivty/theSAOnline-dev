<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>SAO Login</title>
  <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body {
      font-family: 'Press Start 2P', sans-serif;
      background: url('sao_bg.png') no-repeat center center;
      background-size: cover;
      height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 10px;
    }

    .logo {
      width: 100%;
      max-width: 640px;
      height: auto;
      margin-bottom: 0px;
      image-rendering: pixelated;
    }

    .login-box {
      background: rgba(173,216,230,0.85);
      border: 4px solid #000;
      padding: 30px 20px;
      width: 100%;
      max-width: 420px;
      box-shadow: 0 0 15px #000;
      border-radius: 12px;
      text-align: center;
    }

    .login-box h1 {
      font-size: 20px;
      margin-bottom: 20px;
      letter-spacing: 3px;
    }

    .input-field {
      margin: 15px 0;
      text-align: left;
    }

    .input-field label {
      font-size: 10px;
      margin-bottom: 5px;
      display: block;
    }

    .input-field input {
      width: 100%;
      padding: 10px;
      font-size: 14px;
      font-family: inherit;
      border: 3px solid #000;
      border-radius: 10px;
      background: #fff;
    }

    .login-button {
      margin-top: 25px;
      padding: 10px 30px;
      font-family: inherit;
      font-size: 12px;
      background: #ccc;
      border: 3px solid #000;
      border-radius: 10px;
      cursor: pointer;
    }

    .login-button:hover {
      background: #aaa;
    }

    @media (max-width: 400px) {
      .login-box h1 {
        font-size: 16px;
      }

      .login-button {
        width: 100%;
      }
    }
  </style>
</head>
<body>
  <img src="logo_sao.png" alt="SAO Logo" class="logo" />

  <div class="login-box">
    <h1>LOGIN</h1>
    <div class="input-field">
      <label for="userId">User ID:</label>
      <input type="text" id="userId">
    </div>
    <div class="input-field">
      <label for="password">Password:</label>
      <input type="password" id="password">
    </div>
    <button class="login-button">LINK START</button>
  </div>
</body>
</html>
