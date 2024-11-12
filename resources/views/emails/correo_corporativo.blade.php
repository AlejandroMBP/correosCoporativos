<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correo Corporativo - UPEA</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333333;
            background-color: #f9f9f9;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h3 {
            color: #0066cc;
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        p {
            line-height: 1.6;
            font-size: 1em;
            margin: 10px 0;
        }

        .info {
            font-weight: bold;
            color: #333;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            color: #0066cc;
            /* Azul elegante y oscuro para el texto */
            font-weight: bold;
            text-decoration: none;
            border-radius: 5px;
            background-color: #FFFFFF;
            border: 2px solid #0066cc;
            transition: background 0.3s ease, transform 0.3s ease;
        }

        .btn:hover {
            background-color: #f1f1f1;
            /* Cambio de color en hover */
            transform: translateY(-3px);
            /* Efecto sutil de elevación al pasar el cursor */
        }


        .footer {
            margin-top: 20px;
            font-size: 0.9em;
            color: #666666;
            text-align: center;
            border-top: 1px solid #eeeeee;
            padding-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h3>Detalles de Acceso al Correo Corporativo</h3>
        <p>Estimado/a {{ $usuario }},</p>

        <p>Le damos la bienvenida al sistema de correo corporativo de la Universidad Pública de El Alto (UPEA),
            gestionado por la Unidad de Tecnologías de la Información (U-TIC). A continuación, encontrará sus
            credenciales de acceso:</p>


        <p class="info">Correo Corporativo: {{ $correoCorporativo }}</p>
        <p class="info">Contraseña Temporal: {{ $password }}</p>

        <p>Para ingresar a su correo, haga clic en el siguiente botón:</p>
        <p style="text-align: center;">
            <a href="https://mail.upea.edu.bo/static/login/" target="_blank" class="btn">Acceso al Correo Corporativo
                UPEA</a>
        </p>

        <div class="footer">
            <p>Atentamente,</p>
            <p>Departamento de Servicios de Correo - UPEA</p>
            <p><i>Nota: Este correo fue generado automáticamente, por favor no responda a este mensaje.</i></p>
        </div>
    </div>
</body>

</html>
