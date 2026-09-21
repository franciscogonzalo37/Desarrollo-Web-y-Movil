<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Mar Azul - Menú</title>
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
                <!-- Nombre -->
                <a class="navbar-brand" href="index.php">
                    <strong>MAR AZUL</strong>
                </a>
                <!-- Botón responsive -->
                <button class="navbar-toggler" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Usuario -->
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
        <!-- Menú -->
        <div class="container mt-4">
            <h2>Nuestro Menú</h2>
            <!-- Categorías y buscador -->
            <div class="row mt-4 mb-4">
                <div class="col-md-8">
                    <a href="#" class="categoria-menu">
                        Todos
                    </a>
                    <span> | </span>
                    <a href="#" class="categoria-menu">
                        Pescados
                    </a>
                    <span> | </span>
                    <a href="#" class="categoria-menu">
                        Mariscos
                    </a>
                </div>
                <div class="col-md-4">
                    <input type="text"
                           class="form-control"
                           placeholder="Buscar...">
                </div>
            </div>
            <!-- Productos -->
            <div class="row">
                <!-- Producto 1 -->
                <div class="col-md-3 mb-4">
                    <a href="producto.php" class="producto-link">
                        <div class="card h-100">
                            <img src="reineta.jpg"
                                 class="card-img-top imagen-producto"
                                 alt="Reineta a la plancha">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Reineta a la plancha
                                </h5>
                                <h6>$8.990</h6>
                                <p class="card-text">
                                    Reineta preparada a la plancha.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Producto 2 -->
                <div class="col-md-3 mb-4">
                    <a href="producto.php" class="producto-link">
                        <div class="card h-100">
                            <img src="salmon.jpg"
                                 class="card-img-top imagen-producto"
                                 alt="Salmón grillado">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Salmón grillado
                                </h5>
                                <h6>$12.990</h6>
                                <p class="card-text">
                                    Salmón grillado acompañado de verduras.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Producto 3 -->
                <div class="col-md-3 mb-4">
                    <a href="producto.php" class="producto-link">
                        <div class="card h-100">
                            <img src="machas.jpg"
                                 class="card-img-top imagen-producto"
                                 alt="Machas a la parmesana">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Machas a la parmesana
                                </h5>
                                <h6>$10.990</h6>
                                <p class="card-text">
                                    Machas preparadas con queso parmesano.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Producto 4 -->
                <div class="col-md-3 mb-4">
                    <a href="producto.php" class="producto-link">
                        <div class="card h-100">
                            <img src="camarones.jpg"
                                 class="card-img-top imagen-producto"
                                 alt="Camarones al ajillo">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Camarones al ajillo
                                </h5>
                                <h6>$9.990</h6>
                                <p class="card-text">
                                    Camarones salteados con ajo y especias.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Producto 5 -->
                <div class="col-md-3 mb-4">
                    <a href="producto.php" class="producto-link">
                        <div class="card h-100">
                            <img src="merluza.jpg"
                                 class="card-img-top imagen-producto"
                                 alt="Merluza frita">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Merluza frita
                                </h5>
                                <h6>$7.990</h6>
                                <p class="card-text">
                                    Merluza frita de preparación tradicional.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Producto 6 -->
                <div class="col-md-3 mb-4">
                    <a href="producto.php" class="producto-link">
                        <div class="card h-100">
                            <img src="ostiones.jpg"
                                 class="card-img-top imagen-producto"
                                 alt="Ostiones">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Ostiones gratinados
                                </h5>
                                <h6>$11.990</h6>
                                <p class="card-text">
                                    Ostiones gratinados al horno.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Producto 7 -->
                <div class="col-md-3 mb-4">
                    <a href="producto.php" class="producto-link">
                        <div class="card h-100">
                            <img src="ceviche.jpg"
                                 class="card-img-top imagen-producto"
                                 alt="Ceviche">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Ceviche de pescado
                                </h5>
                                <h6>$9.490</h6>
                                <p class="card-text">
                                    Pescado fresco marinado con limón.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Producto 8 -->
                <div class="col-md-3 mb-4">
                    <a href="producto.php" class="producto-link">
                        <div class="card h-100">
                            <img src="paila-marina.jpg"
                                 class="card-img-top imagen-producto"
                                 alt="Paila marina">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Paila marina
                                </h5>
                                <h6>$11.490</h6>
                                <p class="card-text">
                                    Sopa preparada con pescados y mariscos.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>