<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Mar Azul - Anular Pedido</title>
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
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="anular-pedido p-4">
                        <h2>Anular pedido</h2>
                        <h5 class="mt-4">
                            Pedido #001
                        </h5>
                        <form action="pedidos.php">
                            <div class="mt-4">
                                <label for="motivo"
                                       class="form-label">
                                    Indique el motivo de la anulación
                                </label>
                                <textarea class="form-control"
                                          rows="6"
                                          id="motivo"
                                          name="motivo"
                                          placeholder="Escriba aquí el motivo de la anulación..."></textarea>
                            </div>
                            <div class="d-flex justify-content-end mt-4">
                                <a href="pedidos.php"
                                   class="btn btn-outline-primary me-2">
                                    Cancelar
                                </a>
                                <button type="submit"
                                        class="btn btn-danger">
                                    Solicitar anulación
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>