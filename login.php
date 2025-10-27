<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - FitLife Club</title>
    <?php include 'css/cabecera.php'; ?>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand navbar-brand-custom" href="index.php">
                <i class="bi bi-activity me-2"></i>
                FitLife Club
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="servicios.php">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="horarios.php">Horarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="coaches.php">Coaches</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="registro.php">Registro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom active" href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section Login -->
    <section class="hero-section" style="min-height: 40vh; padding: 140px 0 40px;">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 mx-auto">
                    <h1 class="hero-title mb-4">Iniciar Sesión</h1>
                    <p class="hero-subtitle">Accede a tu cuenta para gestionar tu membresía y reservas</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Formulario de Login -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="card card-custom">
                        <div class="card-body p-5">
                            <h3 class="card-title text-center mb-4">Bienvenido de Nuevo</h3>
                            
                            <?php if (isset($_GET['registro']) && $_GET['registro'] === 'exitoso'): ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <i class="bi bi-check-circle-fill me-2"></i>
                                    ¡Registro exitoso! Ya puedes iniciar sesión con tus credenciales.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            <?php endif; ?>
                            
                            <?php if (isset($_GET['error']) && $_GET['error'] === 'credenciales'): ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="bi bi-exclamation-triangle-fill me-2"></i>
                                    Credenciales incorrectas. Por favor intenta nuevamente.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            <?php endif; ?>

                            <form id="formLogin" class="needs-validation" novalidate>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email *</label>
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="bi bi-envelope"></i>
                                        </span>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="tu@email.com" required>
                                    </div>
                                    <div class="invalid-feedback">Por favor ingresa tu email.</div>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Contraseña *</label>
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="bi bi-lock"></i>
                                        </span>
                                        <input type="password" class="form-control" id="password" name="password" required>
                                        <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                    </div>
                                    <div class="invalid-feedback">Por favor ingresa tu contraseña.</div>
                                </div>

                                <div class="mb-3 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="remember" name="remember">
                                        <label class="form-check-label" for="remember">
                                            Recordarme
                                        </label>
                                    </div>
                                    <a href="recuperar-password.php" class="text-primary-custom text-decoration-none">
                                        ¿Olvidaste tu contraseña?
                                    </a>
                                </div>

                                <div class="d-grid mb-3">
                                    <button type="submit" class="btn btn-primary-custom btn-lg" id="btnLogin">
                                        <span class="spinner-border spinner-border-sm me-2 d-none" role="status" aria-hidden="true"></span>
                                        Iniciar Sesión
                                    </button>
                                </div>

                                <div class="text-center">
                                    <p class="text-muted mb-3">O inicia sesión con</p>
                                    <div class="d-grid gap-2">
                                        <button type="button" class="btn btn-outline-dark" onclick="loginConGoogle()">
                                            <i class="bi bi-google me-2"></i>Continuar con Google
                                        </button>
                                        <button type="button" class="btn btn-outline-primary" onclick="loginConFacebook()">
                                            <i class="bi bi-facebook me-2"></i>Continuar con Facebook
                                        </button>
                                    </div>
                                </div>

                                <div class="text-center mt-4">
                                    <p class="text-muted">¿No tienes cuenta? <a href="registro.php" class="text-primary-custom">Regístrate aquí</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer-custom">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5 class="footer-title">
                        <i class="bi bi-activity text-primary-custom me-2"></i>FitLife Club
                    </h5>
                    <p class="text-light">Transformando vidas a través del fitness y bienestar desde 2010.</p>
                </div>
                <div class="col-lg-4 mb-4">
                    <h5 class="footer-title">Enlaces Rápidos</h5>
                    <div class="footer-links">
                        <a href="servicios.php">Servicios</a>
                        <a href="horarios.php">Horarios</a>
                        <a href="coaches.php">Coaches</a>
                        <a href="registro.php">Registro</a>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <h5 class="footer-title">Contacto</h5>
                    <div class="footer-links">
                        <p><i class="bi bi-geo-alt text-primary-custom me-2"></i>Av. Fitness 123, Ciudad</p>
                        <p><i class="bi bi-phone text-primary-custom me-2"></i>+1 234 567 890</p>
                        <p><i class="bi bi-envelope text-primary-custom me-2"></i>info@fitlifeclub.com</p>
                    </div>
                </div>
            </div>
            <hr class="bg-secondary">
            <div class="text-center pt-3">
                <p class="mb-0 text-light">&copy; 2024 FitLife Club. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/auth.js"></script>
</body>
</html>