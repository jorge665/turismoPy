<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contraseña Temporal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            background-color: #ffffff;
            margin: 50px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            padding-bottom: 20px;
            border-bottom: 1px solid #dddddd;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
            color: #333333;
        }

        .content {
            padding: 20px 0;
            text-align: center;
        }

        .content p {
            font-size: 16px;
            color: #555555;
            line-height: 1.5;
        }

        .password-box {
            background-color: #f9f9f9;
            border: 1px dashed #cccccc;
            padding: 15px;
            margin: 20px 0;
            display: inline-block;
            border-radius: 4px;
        }

        .password-box span {
            font-size: 18px;
            color: #333333;
            letter-spacing: 2px;
            font-weight: bold;
        }

        .footer {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #dddddd;
            color: #777777;
            font-size: 14px;
        }

        /* Responsive */
        @media (max-width: 600px) {
            .container {
                margin: 20px;
                padding: 15px;
            }

            .header h1 {
                font-size: 20px;
            }

            .content p {
                font-size: 14px;
            }

            .password-box span {
                font-size: 16px;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="header">
            <h1>Restablecimiento de Contraseña</h1>
        </div>
        <div class="content">
            <p>Hola {{ $name }},</p>
            <p>Hemos recibido una solicitud para restablecer tu contraseña. A continuación, encontrarás tu contraseña
                temporal:</p>
            <div class="password-box">
                <span>{{ $tempPassword }}</span>
            </div>
            <p>Por favor, utiliza esta contraseña para iniciar sesión y asegúrate de cambiarla por una nueva contraseña
                que sea fácil de recordar para ti.</p>
            <p>Si no solicitaste este cambio, por favor ignora este correo o contacta con nuestro soporte.</p>
        </div>
        <div class="footer">
            <p>© 2024 Turismo PY. Todos los derechos reservados.</p>
            <p>Si tienes alguna pregunta, no dudes en <a href="mailto:soporteTurismoPy@gmail.com">contactarnos</a>.</p>
        </div>
    </div>

</body>

</html>
