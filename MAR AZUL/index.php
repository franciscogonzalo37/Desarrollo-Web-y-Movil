<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Mar Azul</title>
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
                <!-- Opciones -->
                <div class="collapse navbar-collapse justify-content-end"
                    id="collapsibleNavbar">
                    <div class="text-end">
                        <!-- Primera fila -->
                        <div>
                            <a href="#"
                            class="nav-link d-inline"
                            data-bs-toggle="modal"
                            data-bs-target="#modalRegistro">
                                Registro
                            </a>
                            <span class="text-white">|</span>
                            <a href="#"
                            class="nav-link d-inline"
                            data-bs-toggle="modal"
                            data-bs-target="#modalIngreso">
                                Ingreso
                            </a>
                        </div>
                        <!-- Segunda fila -->
                        <div class="mt-2">
                            <a href="carrito.php" class="nav-link">
                                Carrito
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Productos destacados -->
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row g-0">
                        <div class="col-3">
                            <img src="plato1.jpg"
                                 class="img-fluid producto-destacado"
                                 alt="Plato 1">
                        </div>
                        <div class="col-3">
                            <img src="plato2.jpg"
                                 class="img-fluid producto-destacado"
                                 alt="Plato 2">
                        </div>
                        <div class="col-3">
                            <img src="plato3.jpg"
                                 class="img-fluid producto-destacado"
                                 alt="Plato 3">
                        </div>
                        <div class="col-3">
                            <img src="plato4.jpg"
                                 class="img-fluid producto-destacado"
                                 alt="Plato 4">
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="menu.php"
                           class="btn btn-marazul w-100 rounded-0">
                            VER MENÚ
                        </a>
                    </div>
                </div>
            </div>
            <!-- Ofertas -->
            <h2 class="text-center mt-5 mb-4">
                Ofertas del día
            </h2>
            <div class="row justify-content-center">
                <!-- Oferta 1 -->
                <div class="col-md-4 text-center mb-4">
                    <img src="oferta1.jpg"
                         class="img-fluid imagen-oferta"
                         alt="Oferta 1">
                    <h5 class="mt-2">Reineta a la plancha</h5>
                    <p>$7.990</p>
                    <a href="producto.php"
                       class="btn btn-marazul">
                        Ver producto
                    </a>
                </div>
                <!-- Oferta 2 -->
                <div class="col-md-4 text-center mb-4">
                    <img src="oferta2.jpg"
                         class="img-fluid imagen-oferta"
                         alt="Oferta 2">
                    <h5 class="mt-2">Machas a la parmesana</h5>
                    <p>$8.990</p>
                    <a href="producto.php"
                       class="btn btn-marazul">
                        Ver producto
                    </a>
                </div>
                <!-- Oferta 3 -->
                <div class="col-md-4 text-center mb-4">
                    <img src="oferta3.jpg"
                         class="img-fluid imagen-oferta"
                         alt="Oferta 3">
                    <h5 class="mt-2">Camarones al ajillo</h5>
                    <p>$9.990</p>
                    <a href="producto.php"
                       class="btn btn-marazul">
                        Ver producto
                    </a>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <footer class="footer-marazul mt-5">
            <div class="container py-4">
                <div class="row">
                    <div class="col-md-4">
                        <h5>Contacto</h5>
                        <p>+56 9 1234 5678</p>
                    </div>
                    <div class="col-md-4">
                        <h5>Dirección</h5>
                        <p>Av. Ejemplo 1234</p>
                    </div>
                    <div class="col-md-4">
                        <h5>Redes Sociales</h5>
                        <p>Instagram | Facebook</p>
                    </div>
                </div>
            </div>
        </footer>
        <!--Ingreso-->
        <div class="modal fade" id="modalIngreso">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Ingreso</h4>
                        <button type="button"
                                class="btn-close"
                                data-bs-dismiss="modal">
                        </button>
                    </div>
                    <!-- Modal Body -->
                    <div class="modal-body">
                        <form action="menu.php">
                            <!-- Correo -->
                            <div class="mb-3">
                                <label for="email" class="form-label">
                                    Correo electrónico
                                </label>
                                <input type="email"
                                    class="form-control"
                                    id="email"
                                    name="email"
                                    placeholder="Ingrese su correo">
                            </div>
                            <!-- Contraseña -->
                            <div class="mb-3">
                                <label for="password" class="form-label">
                                    Contraseña
                                </label>
                                <input type="password"
                                    class="form-control"
                                    id="password"
                                    name="password"
                                    placeholder="Ingrese su contraseña">
                            </div>
                            <!-- Ingresar -->
                            <div class="text-end">
                                <button type="submit"
                                        class="btn btn-marazul">
                                    Ingresar
                                </button>
                            </div>
                        </form>
                        <!-- Recuperar contraseña -->
                        <div class="text-center mt-4">
                            <a href="#">
                                ¿Olvidaste tu contraseña?
                            </a>
                        </div>
                        <!-- Registrarse -->
                        <div class="text-center mt-4">
                            <a href="registro.php"
                            class="btn btn-outline-primary">
                                Registrarse
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Registro -->
        <div class="modal fade" id="modalRegistro">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Registro</h4>
                        <button type="button"
                                class="btn-close"
                                data-bs-dismiss="modal">
                        </button>
                    </div>
                    <!-- Modal Body -->
                    <div class="modal-body">
                        <form action="index.php">
                            <div class="row">
                                <!-- Columna izquierda -->
                                <div class="col-md-6">
                                    <!-- Nombre completo -->
                                    <div class="mb-3">
                                        <label for="nombre" class="form-label">
                                            Nombre completo
                                        </label>
                                        <input type="text"
                                            class="form-control"
                                            id="nombre"
                                            name="nombre">
                                    </div>
                                    <!-- Fecha nacimiento -->
                                    <div class="mb-3">
                                        <label for="fecha" class="form-label">
                                            Fecha de nacimiento
                                        </label>
                                        <input type="date"
                                            class="form-control"
                                            id="fecha"
                                            name="fecha">
                                    </div>
                                    <!-- Correo -->
                                    <div class="mb-3">
                                        <label for="correoRegistro" class="form-label">
                                            Correo electrónico
                                        </label>
                                        <input type="email"
                                            class="form-control"
                                            id="correoRegistro"
                                            name="correo">
                                    </div>
                                    <!-- Dirección -->
                                    <div class="mb-3">
                                        <label for="direccion" class="form-label">
                                            Dirección
                                        </label>
                                        <input type="text"
                                            class="form-control"
                                            id="direccion"
                                            name="direccion">
                                    </div>
                                    <!-- Comuna -->
                                    <div class="mb-3">
                                        <label for="comuna" class="form-label">
                                            Comuna
                                        </label>
                                        <input type="text"
                                            class="form-control"
                                            id="comuna"
                                            name="comuna">
                                    </div>
                                    <!-- Contraseña -->
                                    <div class="mb-3">
                                        <label for="passwordRegistro" class="form-label">
                                            Contraseña
                                        </label>
                                        <input type="password"
                                            class="form-control"
                                            id="passwordRegistro"
                                            name="password">
                                    </div>
                                </div>
                                <!-- Columna derecha -->
                                <div class="col-md-6">
                                    <!-- RUN -->
                                    <div class="mb-3">
                                        <label for="run" class="form-label">
                                            RUT
                                        </label>
                                        <input type="text"
                                            class="form-control"
                                            id="run"
                                            name="run"
                                            placeholder="12.345.678-9">
                                    </div>
                                    <!-- Sexo -->
                                    <div class="mb-3">
                                        <label for="sexo" class="form-label">
                                            Sexo
                                        </label>
                                        <select class="form-select"
                                                id="sexo"
                                                name="sexo">
                                            <option selected>Seleccione</option>
                                            <option>Hombre</option>
                                            <option>Mujer</option>
                                            <option>No especificar</option>
                                        </select>
                                    </div>
                                    <!-- Teléfono -->
                                    <div class="mb-3">
                                        <label for="telefono" class="form-label">
                                            Teléfono
                                        </label>
                                        <input type="tel"
                                            class="form-control"
                                            id="telefono"
                                            name="telefono"
                                            placeholder="+56 9">
                                    </div>
                                    <!-- Región -->
                                    <div class="mb-3">
                                        <label for="region" class="form-label">
                                            Región
                                        </label>
                                        <input type="text"
                                            class="form-control"
                                            id="region"
                                            name="region">
                                    </div>
                                    <!-- Provincia -->
                                    <div class="mb-3">
                                        <label for="provincia" class="form-label">
                                            Provincia
                                        </label>
                                        <input type="text"
                                            class="form-control"
                                            id="provincia"
                                            name="provincia">
                                    </div>
                                    <!-- Confirmar contraseña -->
                                    <div class="mb-3">
                                        <label for="confirmarPassword" class="form-label">
                                            Confirmar contraseña
                                        </label>
                                        <input type="password"
                                            class="form-control"
                                            id="confirmarPassword"
                                            name="confirmarPassword">
                                    </div>
                                </div>
                            </div>
                            <!-- Crear cuenta -->
                            <div class="text-end">
                                <button type="submit"
                                        class="btn btn-marazul">
                                    Crear cuenta
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>