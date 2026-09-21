<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Mar Azul - Pedido Confirmado</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
        <!-- CSS Mar Azul -->
        <link rel="stylesheet" href="paletacolores.css">
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-sm navbar-dark navbar-marazul">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <strong>MAR AZUL</strong>
                </a>
                <div class="text-end">
                    <div class="text-white">
                        Hola, Usuario
                    </div>
                    <div class="mt-2">
                        <a href="pedidos.php"
                           class="nav-link d-inline">
                            Pedidos
                        </a>
                        <span class="text-white">|</span>
                        <a href="carrito.php"
                           class="nav-link d-inline">
                            Carrito (0)
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Confirmación -->
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="pedido-confirmado text-center p-5">
                        <h2>
                            ¡Pedido confirmado!
                        </h2>
                        <h4 class="mt-4">
                            Pedido #001
                        </h4>
                        <p class="mt-4">
                            Tu pago ha sido confirmado y comenzaremos
                            a preparar tu pedido.
                        </p>
                        <p>
                            La boleta será enviada a tu correo electrónico.
                        </p>
                        <div class="mt-4">
                            <a href="pedidos.php"
                               class="btn btn-marazul me-2">
                                Ver pedido
                            </a>
                            <a href="index.php"
                               class="btn btn-outline-primary">
                                Ir al inicio
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>