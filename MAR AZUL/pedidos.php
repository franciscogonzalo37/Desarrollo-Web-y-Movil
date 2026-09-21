<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Mar Azul - Mis Pedidos</title>
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
                <button class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end"
                     id="collapsibleNavbar">
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
            </div>
        </nav>
        <!-- Contenido -->
        <div class="container mt-4">
            <h2>Mis pedidos</h2>
            <div class="table-responsive mt-4">
                <table class="table table-bordered align-middle">
                    <thead>
                        <tr>
                            <th>N° Pedido</th>
                            <th>Fecha</th>
                            <th>Estado</th>
                            <th>Total</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Pedido 1 -->
                        <tr>
                            <td>#001</td>
                            <td>20/09/2026</td>
                            <td>
                                En preparación
                            </td>
                            <td>
                                $18.980
                            </td>
                            <td>
                                <a href="#"
                                   class="btn btn-outline-primary btn-sm">
                                    Ver detalle
                                </a>
                                <a href="anular.php"
                                   class="btn btn-outline-danger btn-sm">
                                    Anular pedido
                                </a>
                            </td>
                        </tr>
                        <!-- Pedido 2 -->
                        <tr>
                            <td>#002</td>
                            <td>15/09/2026</td>
                            <td>
                                Entregado
                            </td>
                            <td>
                                $12.990
                            </td>
                            <td>
                                <a href="#"
                                   class="btn btn-outline-primary btn-sm">
                                    Ver detalle
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                <a href="menu.php"
                   class="btn btn-outline-primary">
                    Volver al menú
                </a>
            </div>
        </div>
    </body>
</html>