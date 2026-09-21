<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Mar Azul - Detalle Producto</title>
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
                                Carrito (0)
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Contenido -->
        <div class="container mt-4">
            <!-- Volver -->
            <div class="mb-4">
                <a href="menu.php" class="categoria-menu">
                    ← Volver al menú
                </a>
            </div>
            <div class="row">
                <!-- Imagen del producto -->
                <div class="col-md-6 mb-4">
                    <img src="reineta.jpg"
                         class="img-fluid imagen-detalle"
                         alt="Reineta a la plancha">
                </div>
                <!-- Información del producto -->
                <div class="col-md-6">
                    <h2>Reineta a la plancha</h2>
                    <p class="disponible">
                        Disponible
                    </p>
                    <p>
                        Filete de reineta preparado a la plancha,
                        acompañado de papas doradas y ensalada.
                    </p>
                    <h3 class="mt-4">
                        $8.990
                    </h3>
                    <!-- Cantidad -->
                    <div class="mt-4">
                        <h5>Cantidad</h5>
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
                    <!-- Observaciones -->
                    <div class="mt-4">
                        <label for="observaciones"
                               class="form-label">
                            Observaciones
                        </label>
                        <textarea class="form-control"
                                  rows="4"
                                  id="observaciones"
                                  name="observaciones"
                                  placeholder="Ej: sin cebolla, sin sal, etc."></textarea>
                    </div>
                    <!-- Agregar -->
                    <div class="text-end mt-4">
                        <a href="carrito.php"
                           class="btn btn-marazul">
                            Agregar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>