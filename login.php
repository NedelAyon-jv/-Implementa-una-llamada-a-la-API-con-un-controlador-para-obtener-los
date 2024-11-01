<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Bootstrap</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: cyan;
    }

    .login-container {
      max-width: 400px;
      margin-top: 250px;
      box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    }

    .card {
      padding: 20px;
      border-radius: 15px;
    }

    .myButton {
      background-color: #07449f;
      border-radius: 28px;
      border: 1px solid #07449f;
      display: inline-block;
      cursor: pointer;
      color: #ffffff;
      font-family: Arial;
      font-size: 16px;
      padding: 16px 100px;
      text-decoration: none;
      text-shadow: 0px 1px 0px #2f6627;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="login-container mx-auto">
      <div class="card shadow-lg">
        <h1>Iniciar Sesión</h1>
        <form action="AuthController.php" method="POST">
          <div class="mb-3">
            <label for="usuario" class="form-label">Correo:</label>
            <input type="email" class="form-control" id="usuario" name="usuario" required>
          </div>
          <div class="mb-3">
            <label for="contrasena" class="form-label">Contraseña:</label>
            <input type="password" class="form-control" id="contrasena" name="contrasena" required>
          </div>
          <button type="submit" class="btn btn-primary myButton">Iniciar Sesión</button>
          <input type="hidden" value="login" name="action">
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
