<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Void | Iniciar Sesión</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f7ece4;
            color: #111111;
            display: flex;
            height: 100vh;
            width: 100vw;
            overflow: hidden;
        }

        .login-container {
            display: flex;
            width: 100%;
            height: 100%;
        }

        /* Columna Izquierda: Contenedor estricto para la imagen */
        .login-image {
            flex: 1;
            height: 100vh;
            max-height: 100vh;
            position: relative;
            overflow: hidden;
            background-color: #111;
            display: flex;
            justify-content: center;
            align-items: center;
        }

       .login-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Cambiamos el foco de la imagen: de 'center' a 'top' */
            object-position: top; 
            display: block;
        }
        /* Columna Derecha: El Formulario */
        .login-form-section {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f7ece4;
            padding: 40px;
            height: 100vh;
        }

        .login-card {
            background: #ffffff;
            padding: 40px;
            border-radius: 8px;
            border: 1px solid #e0c8b9;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
        }

        .login-card h2 {
            text-align: center;
            margin-bottom: 25px;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 1.5rem;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            font-size: 0.9rem;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
        }

        .form-group input:focus {
            outline: none;
            border-color: #d35400;
        }

        .btn-submit {
            width: 100%;
            padding: 12px;
            background-color: #111;
            color: white;
            border: none;
            border-radius: 4px;
            font-weight: bold;
            text-transform: uppercase;
            cursor: pointer;
            transition: background 0.3s;
        }

        .btn-submit:hover {
            background-color: #d35400;
        }

        .links {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
            font-size: 0.85rem;
        }

        .links a {
            color: #555;
            text-decoration: none;
        }

        .links a:hover {
            color: #111;
            text-decoration: underline;
        }

        /* Responsivo para celulares o pantallas chicas */
        @media (max-width: 768px) {
            .login-image {
                display: none;
            }
        }
    </style>
</head>
<body>

    <div class="login-container">
        <!-- Lado izquierdo: Imagen controlada -->
        <div class="login-image">
            <img src="images.jpg" alt="Nova Void Estilo">
        </div>

        <!-- Lado derecho: Formulario -->
        <div class="login-form-section">
            <div class="login-card">
                <h2>Nova Void</h2>
                <form action="procesar_login.php" method="POST">
                    <div class="form-group">
                        <label for="email">Correo Electrónico</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" id="password" name="password" required>
                    </div>

                    <button type="submit" class="btn-submit">Ingresar</button>
                </form>
                
                <div class="links">
                    <a href="registro.php">Crear cuenta</a>
                    <a href="index.php">&larr; Volver al inicio</a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>