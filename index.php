<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitLife Club - Transforma tu Vida</title>
    <?php include '../includes/header.php'; ?>
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
                        <a class="nav-link nav-link-custom active" href="index.php">Inicio</a>
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
                        <a class="nav-link nav-link-custom" href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="hero-title">Transforma tu Vida en FitLife Club</h1>
                    <p class="hero-subtitle">Más que un gimnasio, un estilo de vida. Descubre nuestros servicios exclusivos y comienza tu journey hacia el bienestar total.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="registro.php" class="btn btn-primary-custom btn-lg">
                            <i class="bi bi-person-plus me-2"></i>Únete Ahora
                        </a>
                        <a href="servicios.php" class="btn btn-outline-custom btn-lg">
                            <i class="bi bi-info-circle me-2"></i>Conoce Más
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="assets/images/hero-image.png" alt="FitLife Club" class="img-fluid rounded-3 shadow-lg" style="max-height: 500px;">
                </div>
            </div>
        </div>
    </section>

    <!-- Servicios Section -->
    <section class="section-padding bg-light">
        <div class="container">
            <h2 class="section-title">Nuestros Servicios</h2>
            <p class="section-subtitle">Descubre todo lo que tenemos para ofrecerte</p>
            
            <div class="row g-4">
                <!-- Servicio 1 -->
                <div class="col-md-4">
                    <div class="card card-custom h-100">
                        <div class="card-body text-center p-4">
                            <div class="card-icon">
                                <i class="bi bi-person-check"></i>
                            </div>
                            <h5 class="card-title fw-bold mb-3">Entrenamiento Personalizado</h5>
                            <p class="card-text text-muted">Programas adaptados a tus objetivos con seguimiento constante de nuestros coaches certificados.</p>
                            <a href="servicios.php#personalizado" class="btn btn-outline-custom mt-3">Saber Más</a>
                        </div>
                    </div>
                </div>
                
                <!-- Servicio 2 -->
                <div class="col-md-4">
                    <div class="card card-custom h-100">
                        <div class="card-body text-center p-4">
                            <div class="card-icon">
                                <i class="bi bi-people"></i>
                            </div>
                            <h5 class="card-title fw-bold mb-3">Clases Grupales</h5>
                            <p class="card-text text-muted">Yoga, spinning, crossfit y más. ¡Elige tu favorita y únete a nuestra comunidad!</p>
                            <a href="servicios.php#grupales" class="btn btn-outline-custom mt-3">Saber Más</a>
                        </div>
                    </div>
                </div>
                
                <!-- Servicio 3 -->
                <div class="col-md-4">
                    <div class="card card-custom h-100">
                        <div class="card-body text-center p-4">
                            <div class="card-icon">
                                <i class="bi bi-egg-fried"></i>
                            </div>
                            <h5 class="card-title fw-bold mb-3">Asesoría Nutricional</h5>
                            <p class="card-text text-muted">Planificación alimentaria personalizada para complementar tu entrenamiento y alcanzar tus metas.</p>
                            <a href="servicios.php#nutricion" class="btn btn-outline-custom mt-3">Saber Más</a>
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
    <script src="js/main.js"></script>
</body>
</html>