<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autenticos Internacional</title>
    
    <!-- Agregar enlaces a Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('fondologin.jpg'); /* Reemplaza 'imagen_de_fondo.jpg' con la ruta de tu imagen de fondo */
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        header {
            text-align: center;
            padding: 20px;
        }

        header img {
            max-width: 100%;
            height: auto;
        }

        h1 {
            color: #fff;
        }
    </style>
</head>
<body>
    <header>
        <img src="Img_BienvenidoAI_Filtro.png" alt="Logotipo Autenticos Internacional">
        <h1>Bienvenido a Autenticos Internacional</h1>
        <img src="Autenticos Internacional Family Company Happy.png" alt="Logotipo Autenticos Internacional">
    </header>

    <section>
        <!-- Botón con Bootstrap -->
        <button class="btn btn-primary" onclick="location.href='cliente/mostrarCliente.php'">Iniciar Registro</button>
    </section>

    <footer>
        <!-- Puedes agregar un pie de página si es necesario -->
    </footer>

    <!-- Agregar el script de Bootstrap (jQuery y Popper.js son requeridos) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
