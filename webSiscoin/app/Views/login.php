<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/css/login.css') ?>">


    <title>Login</title>
  </head>
  <body>
    
  <main>
            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="login__caja">
                        <h3>¿Ya estás registrado?</h3>
                        <p>Iniciar Sesión con Cuenta Registrada</p>
                        <button id="btn_Login">Iniciar Sesión</button>
                    </div>
                    <div class="register__caja">
                        <h3>¿Aún no tienes cuenta?</h3>
                        <p>Regístrese para Iniciar Sesión</p>
                        <button id="btn_Register">Registrarse</button>
                    </div>
                </div>
                <div class="contenedor__Login-Register">
                    <form action="login.php" method="POST" class="Formulario__Login">
                        <h2>Iniciar Sesión</h2>
                        <label for="email">Correo Electrónico:</label>
                        <input type="email" id="email" name="email" placeholder="Correo Electrónico" required>
                        <label for="password">Contraseña:</label>
                        <input type="password" id="password" name="password" placeholder="Contraseña" required>
                        <button type="submit">Ingresar</button>
                    </form>
                    <form action="registro.php" method="POST" class="Formulario__Register">
                        <h2>Registrarse</h2>
                        <label for="name_complete">Nombre Completo:</label>
                        <input type="text" id="name_complete" name="name_complete" placeholder="Nombre Completo" required>
                        <label for="email_register">Correo Electrónico:</label>
                        <input type="email" id="email_register" name="email" placeholder="Correo Electrónico" required>
                        <label for="user">Nombre de Usuario:</label>
                        <input type="text" id="user" name="user" placeholder="Nombre de Usuario" required>
                        <label for="password_register">Contraseña:</label>
                        <input type="password" id="password_register" name="password" placeholder="Contraseña" required>
                        <button type="submit">Registrarse</button>
                    </form>
                </div>
            </div>
        </main>
        <script src="<?= base_url('assets/js/login.js') ?>"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    -->
  </body>
</html>