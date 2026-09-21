<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Mar Azul - Datos de Entrega</title>
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
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h2>Datos de entrega</h2>
                    <p>
                        El delivery es gratuito dentro de nuestra zona de despacho.
                    </p>
                    <form action="confirmado.php">
                        <!-- Nombre -->
                        <div class="mb-3">
                            <label for="nombre"
                                   class="form-label">
                                Nombre completo
                            </label>
                            <input type="text"
                                   class="form-control"
                                   id="nombre"
                                   name="nombre">
                        </div>
                        <!-- Dirección -->
                        <div class="mb-3">
                            <label for="direccion"
                                   class="form-label">
                                Dirección
                            </label>
                            <input type="text"
                                   class="form-control"
                                   id="direccion"
                                   name="direccion">
                        </div>
                        <!-- Comuna -->
                        <div class="mb-3">
                            <label for="comuna"
                                   class="form-label">
                                Comuna
                            </label>
                            <input type="text"
                                   class="form-control"
                                   id="comuna"
                                   name="comuna">
                        </div>
                        <!-- Teléfono -->
                        <div class="mb-3">
                            <label for="telefono"
                                   class="form-label">
                                Teléfono
                            </label>
                            <input type="tel"
                                   class="form-control"
                                   id="telefono"
                                   name="telefono"
                                   placeholder="+56 9">
                        </div>
                        <!-- Referencia -->
                        <div class="mb-4">
                            <label for="referencia"
                                   class="form-label">
                                Referencia
                            </label>
                            <textarea class="form-control"
                                      rows="3"
                                      id="referencia"
                                      name="referencia"
                                      placeholder="Ej: casa de reja azul, departamento 302..."></textarea>
                        </div>
                        <!-- Método de pago -->
                        <h4>Método de pago</h4>
                        <div class="form-check mt-3">
                            <input class="form-check-input"
                                   type="radio"
                                   name="pago"
                                   id="servipag"
                                   value="servipag">
                            <label class="form-check-label"
                                   for="servipag">
                                Servipag
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input class="form-check-input"
                                   type="radio"
                                   name="pago"
                                   id="deposito"
                                   value="deposito">
                            <label class="form-check-label"
                                   for="deposito">
                                Depósito bancario
                            </label>
                        </div>
                        <!-- Botones -->
                        <div class="d-flex justify-content-between mt-4">
                            <a href="carrito.php"
                               class="btn btn-outline-primary">
                                Volver
                            </a>
                            <button type="submit"
                                    class="btn btn-marazul">
                                Pagar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>