<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios - FitLife Club</title>
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
                        <a class="nav-link nav-link-custom active" href="servicios.php">Servicios</a>
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

    <!-- Hero Section Servicios -->
    <section class="hero-section" style="min-height: 60vh; padding: 140px 0 60px;">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 mx-auto">
                    <h1 class="hero-title mb-4">Nuestros Servicios</h1>
                    <p class="hero-subtitle">Descubre todos los servicios que tenemos para ayudarte a alcanzar tus metas fitness</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Servicios Detallados -->
    <section class="section-padding" id="servicios-detallados">
        <div class="container">
            <!-- Entrenamiento Personalizado -->
            <div class="row align-items-center mb-5" id="personalizado">
                <div class="col-lg-6">
                    <img src="assets/images/entrenamiento-personalizado.jpg" alt="Entrenamiento Personalizado" class="img-fluid rounded-3 shadow">
                </div>
                <div class="col-lg-6">
                    <span class="badge bg-primary-custom mb-3">Servicio Premium</span>
                    <h2 class="fw-bold mb-4">Entrenamiento Personalizado</h2>
                    <p class="mb-4">Programas de entrenamiento completamente personalizados diseñados por nuestros coaches certificados. Adaptamos cada sesión a tus objetivos específicos, nivel de condición física y preferencias.</p>
                    
                    <div class="mb-4">
                        <h5 class="fw-semibold mb-3">Beneficios:</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary-custom me-2"></i>Planificación individualizada</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary-custom me-2"></i>Seguimiento constante</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary-custom me-2"></i>Ajustes según progreso</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary-custom me-2"></i>Técnica perfecta garantizada</li>
                        </ul>
                    </div>
                    
                    <div class="d-flex flex-wrap gap-3">
                        <span class="h4 text-primary-custom fw-bold">$899/mes</span>
                        <a href="registro.php" class="btn btn-primary-custom">Comenzar Ahora</a>
                    </div>
                </div>
            </div>

            <hr class="my-5">

            <!-- Clases Grupales -->
            <div class="row align-items-center mb-5" id="grupales">
                <div class="col-lg-6 order-lg-2">
                    <img src="assets/images/clases-grupales.jpg" alt="Clases Grupales" class="img-fluid rounded-3 shadow">
                </div>
                <div class="col-lg-6 order-lg-1">
                    <span class="badge bg-success mb-3">Comunidad</span>
                    <h2 class="fw-bold mb-4">Clases Grupales</h2>
                    <p class="mb-4">Únete a nuestra comunidad vibrante en clases diseñadas para todos los niveles. Desde yoga relajante hasta high-intensity interval training, tenemos la clase perfecta para ti.</p>
                    
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h6 class="fw-semibold">Clases Disponibles:</h6>
                            <ul class="list-unstyled">
                                <li class="mb-1"><i class="bi bi-dot text-primary-custom"></i> Yoga & Pilates</li>
                                <li class="mb-1"><i class="bi bi-dot text-primary-custom"></i> Spinning</li>
                                <li class="mb-1"><i class="bi bi-dot text-primary-custom"></i> CrossFit</li>
                                <li class="mb-1"><i class="bi bi-dot text-primary-custom"></i> Zumba</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h6 class="fw-semibold">Horarios:</h6>
                            <ul class="list-unstyled">
                                <li class="mb-1"><i class="bi bi-clock text-primary-custom me-1"></i> Lunes a Viernes</li>
                                <li class="mb-1"><i class="bi bi-clock text-primary-custom me-1"></i> 6:00 AM - 9:00 PM</li>
                                <li class="mb-1"><i class="bi bi-clock text-primary-custom me-1"></i> Sábados: 7:00 AM - 2:00 PM</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="d-flex flex-wrap gap-3">
                        <span class="h4 text-primary-custom fw-bold">$499/mes</span>
                        <a href="registro.php" class="btn btn-primary-custom">Unirme a Clases</a>
                    </div>
                </div>
            </div>

            <hr class="my-5">

            <!-- Asesoría Nutricional -->
            <div class="row align-items-center mb-5" id="nutricion">
                <div class="col-lg-6">
                    <img src="assets/images/asesoria-nutricional.jpg" alt="Asesoría Nutricional" class="img-fluid rounded-3 shadow">
                </div>
                <div class="col-lg-6">
                    <span class="badge bg-warning mb-3">Especializado</span>
                    <h2 class="fw-bold mb-4">Asesoría Nutricional</h2>
                    <p class="mb-4">Completa tu transformación con planes nutricionales personalizados. Nuestros nutricionistas certificados te guiarán hacia hábitos alimenticios saludables que complementen tu entrenamiento.</p>
                    
                    <div class="mb-4">
                        <h5 class="fw-semibold mb-3">Incluye:</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary-custom me-2"></i>Evaluación nutricional completa</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary-custom me-2"></i>Plan alimenticio personalizado</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary-custom me-2"></i>Seguimiento semanal</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary-custom me-2"></i>Ajustes según resultados</li>
                        </ul>
                    </div>
                    
                    <div class="d-flex flex-wrap gap-3">
                        <span class="h4 text-primary-custom fw-bold">$699/mes</span>
                        <a href="registro.php" class="btn btn-primary-custom">Comenzar Asesoría</a>
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
    <script src="js/servicios.js"></script>
</body>
</html>