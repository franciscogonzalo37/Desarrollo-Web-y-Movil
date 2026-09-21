<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Mar Azul - Carrito</title>
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
                <button class="navbar-toggler" type="button"
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
                            <a href="pedidos.php" class="nav-link d-inline">
                                Pedidos
                            </a>
                            <span class="text-white">|</span>
                            <a href="carrito.php" class="nav-link d-inline">
                                Carrito (2)
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Contenido -->
        <div class="container mt-4">
            <div class="row">
                <!-- Tu pedido -->
                <div class="col-md-8">
                    <h2>Tu pedido</h2>
                    <!-- Producto 1 -->
                    <div class="row align-items-center producto-carrito mt-4">
                        <div class="col-md-3">
                            <img src="reineta.jpg"
                                 class="img-fluid imagen-carrito"
                                 alt="Reineta a la plancha">
                        </div>
                        <div class="col-md-5">
                            <h5>Reineta a la plancha</h5>
                            <p>$8.990</p>
                            <a href="#">
                                Eliminar
                            </a>
                        </div>
                        <div class="col-md-4 text-center">
                            <button type="button"
                                    class="btn btn-outline-primary">
                                -
                            </button>
                            <span class="mx-3">
                                1
                            </span>
                            <button type="button"
                                    class="btn btn-outline-primary">
                                +
                            </button>
                        </div>
                    </div>
                    <!-- Producto 2 -->
                    <div class="row align-items-center producto-carrito mt-4">
                        <div class="col-md-3">
                            <img src="camarones.jpg"
                                 class="img-fluid imagen-carrito"
                                 alt="Camarones al ajillo">
                        </div>
                        <div class="col-md-5">
                            <h5>Camarones al ajillo</h5>
                            <p>$9.990</p>
                            <a href="#">
                                Eliminar
                            </a>
                        </div>
                        <div class="col-md-4 text-center">
                            <button type="button"
                                    class="btn btn-outline-primary">
                                -
                            </button>
                            <span class="mx-3">
                                1
                            </span>
                            <button type="button"
                                    class="btn btn-outline-primary">
                                +
                            </button>
                        </div>
                    </div>
                    <!-- Volver al menú -->
                    <div class="mt-4">
                        <a href="menu.php"
                           class="categoria-menu">
                            ← Volver al menú
                        </a>
                    </div>
                </div>
                <!-- Resumen -->
                <div class="col-md-4">
                    <div class="resumen-carrito p-4">
                        <h3>Resumen</h3>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <span>Subtotal</span>
                            <span>$18.980</span>
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <span>Delivery</span>
                            <span>Gratis</span>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <strong>Total</strong>
                            <strong>$18.980</strong>
                        </div>
                        <a href="entrega.php"
                           class="btn btn-marazul w-100 mt-4">
                            Continuar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>