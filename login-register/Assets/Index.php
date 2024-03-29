<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>registrate</h3>
                    <p>Iniciar sesión</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>create una cuenta</h3>
                    <p>Regístrate para iniciar sesión</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>
            <div class="contenedor__login-register">
                <form action="php/login_usuario_be.php" method ="POST" class="formulario__login" >
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Usuario" name = "usuario"> 
                    <input type="password" placeholder="Contraseña" name = "contrasena"> 
                    <button>Entrar</button>
                </form>
                <form action="php/registro_usuario_be.php" method ="POST" class="formulario__register" >
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name = "nombre_completo">
                    <input type="int" placeholder="Cedula" name= "cedula">
                    <input type="text" placeholder="Usuario" name = "usuario">
                    <input type="password" placeholder="Contraseña" name = "contrasena">
                    <button>Registrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="js/script.js"></script>
</body>
</html>
