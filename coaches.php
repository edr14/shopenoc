<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coaches - FitLife Club</title>
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
                        <a class="nav-link nav-link-custom active" href="coaches.php">Coaches</a>
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

    <!-- Hero Section Coaches -->
    <section class="hero-section" style="min-height: 50vh; padding: 140px 0 60px;">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 mx-auto">
                    <h1 class="hero-title mb-4">Nuestros Coaches</h1>
                    <p class="hero-subtitle">Conoce al equipo de profesionales que te guiará en tu transformación fitness</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Coaches Section -->
    <section class="section-padding">
        <div class="container">
            <!-- Filtros por especialidad -->
            <div class="row mb-5">
                <div class="col-12">
                    <div class="card card-custom">
                        <div class="card-body text-center">
                            <h4 class="card-title mb-4">Filtrar por Especialidad</h4>
                            <div class="d-flex flex-wrap justify-content-center gap-2" id="filtroEspecialidades">
                                <button class="btn btn-outline-custom active" data-especialidad="all">Todos</button>
                                <button class="btn btn-outline-custom" data-especialidad="yoga">Yoga</button>
                                <button class="btn btn-outline-custom" data-especialidad="crossfit">CrossFit</button>
                                <button class="btn btn-outline-custom" data-especialidad="spinning">Spinning</button>
                                <button class="btn btn-outline-custom" data-especialidad="nutricion">Nutrición</button>
                                <button class="btn btn-outline-custom" data-especialidad="personal-training">Entrenamiento Personal</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Grid de Coaches -->
            <div class="row g-4" id="gridCoaches">
                <!-- Coach 1 -->
                <div class="col-lg-4 col-md-6" data-especialidad="yoga,personal-training">
                    <div class="card card-custom h-100 coach-card">
                        <div class="card-body text-center p-4">
                            <div class="coach-avatar mb-3">
                                <img src="assets/images/coach-ana.jpg" alt="Ana Martínez" class="rounded-circle" width="120" height="120">
                            </div>
                            <h5 class="card-title fw-bold">Ana Martínez</h5>
                            <p class="text-primary-custom fw-semibold">Especialista en Yoga & Mindfulness</p>
                            <p class="card-text text-muted mb-3">
                                +8 años de experiencia. Certificada en Yoga Alliance y meditación mindfulness.
                            </p>
                            <div class="coach-especialidades mb-3">
                                <span class="badge bg-primary-custom me-1">Yoga</span>
                                <span class="badge bg-primary-custom me-1">Pilates</span>
                                <span class="badge bg-primary-custom">Meditación</span>
                            </div>
                            <div class="coach-horarios mb-3">
                                <small class="text-muted">
                                    <i class="bi bi-clock me-1"></i>
                                    Lunes a Viernes: 6:00 - 14:00
                                </small>
                            </div>
                            <button class="btn btn-outline-custom btn-sm" onclick="mostrarModalCoach('ana')">
                                <i class="bi bi-person-lines-fill me-1"></i>Ver Perfil
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Coach 2 -->
                <div class="col-lg-4 col-md-6" data-especialidad="crossfit,personal-training">
                    <div class="card card-custom h-100 coach-card">
                        <div class="card-body text-center p-4">
                            <div class="coach-avatar mb-3">
                                <img src="assets/images/coach-miguel.jpg" alt="Miguel Torres" class="rounded-circle" width="120" height="120">
                            </div>
                            <h5 class="card-title fw-bold">Miguel Torres</h5>
                            <p class="text-primary-custom fw-semibold">Head Coach CrossFit</p>
                            <p class="card-text text-muted mb-3">
                                L3 CrossFit Trainer. +10 años transformando vidas through functional fitness.
                            </p>
                            <div class="coach-especialidades mb-3">
                                <span class="badge bg-primary-custom me-1">CrossFit</span>
                                <span class="badge bg-primary-custom me-1">Strength</span>
                                <span class="badge bg-primary-custom">Conditioning</span>
                            </div>
                            <div class="coach-horarios mb-3">
                                <small class="text-muted">
                                    <i class="bi bi-clock me-1"></i>
                                    Lunes a Sábado: 5:00 - 12:00
                                </small>
                            </div>
                            <button class="btn btn-outline-custom btn-sm" onclick="mostrarModalCoach('miguel')">
                                <i class="bi bi-person-lines-fill me-1"></i>Ver Perfil
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Coach 3 -->
                <div class="col-lg-4 col-md-6" data-especialidad="spinning">
                    <div class="card card-custom h-100 coach-card">
                        <div class="card-body text-center p-4">
                            <div class="coach-avatar mb-3">
                                <img src="assets/images/coach-carlos.jpg" alt="Carlos Rodríguez" class="rounded-circle" width="120" height="120">
                            </div>
                            <h5 class="card-title fw-bold">Carlos Rodríguez</h5>
                            <p class="text-primary-custom fw-semibold">Especialista en Cycling</p>
                            <p class="card-text text-muted mb-3">
                                Certificado Schwinn Cycling. Apasionado por el entrenamiento cardiovascular y endurance.
                            </p>
                            <div class="coach-especialidades mb-3">
                                <span class="badge bg-primary-custom me-1">Spinning</span>
                                <span class="badge bg-primary-custom me-1">Cardio</span>
                                <span class="badge bg-primary-custom">Endurance</span>
                            </div>
                            <div class="coach-horarios mb-3">
                                <small class="text-muted">
                                    <i class="bi bi-clock me-1"></i>
                                    Lunes a Viernes: 7:00 - 15:00
                                </small>
                            </div>
                            <button class="btn btn-outline-custom btn-sm" onclick="mostrarModalCoach('carlos')">
                                <i class="bi bi-person-lines-fill me-1"></i>Ver Perfil
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Coach 4 -->
                <div class="col-lg-4 col-md-6" data-especialidad="nutricion">
                    <div class="card card-custom h-100 coach-card">
                        <div class="card-body text-center p-4">
                            <div class="coach-avatar mb-3">
                                <img src="assets/images/coach-sofia.jpg" alt="Sofia López" class="rounded-circle" width="120" height="120">
                            </div>
                            <h5 class="card-title fw-bold">Sofia López</h5>
                            <p class="text-primary-custom fw-semibold">Nutricionista Deportiva</p>
                            <p class="card-text text-muted mb-3">
                                Licenciada en Nutrición. Especializada en nutrición deportiva y hábitos saludables.
                            </p>
                            <div class="coach-especialidades mb-3">
                                <span class="badge bg-primary-custom me-1">Nutrición</span>
                                <span class="badge bg-primary-custom me-1">Salud</span>
                                <span class="badge bg-primary-custom">Wellness</span>
                            </div>
                            <div class="coach-horarios mb-3">
                                <small class="text-muted">
                                    <i class="bi bi-clock me-1"></i>
                                    Martes a Sábado: 9:00 - 17:00
                                </small>
                            </div>
                            <button class="btn btn-outline-custom btn-sm" onclick="mostrarModalCoach('sofia')">
                                <i class="bi bi-person-lines-fill me-1"></i>Ver Perfil
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Coach 5 -->
                <div class="col-lg-4 col-md-6" data-especialidad="personal-training">
                    <div class="card card-custom h-100 coach-card">
                        <div class="card-body text-center p-4">
                            <div class="coach-avatar mb-3">
                                <img src="assets/images/coach-david.jpg" alt="David Chen" class="rounded-circle" width="120" height="120">
                            </div>
                            <h5 class="card-title fw-bold">David Chen</h5>
                            <p class="text-primary-custom fw-semibold">Especialista en Transformación Corporal</p>
                            <p class="card-text text-muted mb-3">
                                NASM Certified. Especializado en pérdida de peso y ganancia muscular.
                            </p>
                            <div class="coach-especialidades mb-3">
                                <span class="badge bg-primary-custom me-1">Transformación</span>
                                <span class="badge bg-primary-custom me-1">Strength</span>
                                <span class="badge bg-primary-custom">Bodybuilding</span>
                            </div>
                            <div class="coach-horarios mb-3">
                                <small class="text-muted">
                                    <i class="bi bi-clock me-1"></i>
                                    Lunes a Viernes: 14:00 - 22:00
                                </small>
                            </div>
                            <button class="btn btn-outline-custom btn-sm" onclick="mostrarModalCoach('david')">
                                <i class="bi bi-person-lines-fill me-1"></i>Ver Perfil
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Coach 6 -->
                <div class="col-lg-4 col-md-6" data-especialidad="yoga">
                    <div class="card card-custom h-100 coach-card">
                        <div class="card-body text-center p-4">
                            <div class="coach-avatar mb-3">
                                <img src="assets/images/coach-laura.jpg" alt="Laura González" class="rounded-circle" width="120" height="120">
                            </div>
                            <h5 class="card-title fw-bold">Laura González</h5>
                            <p class="text-primary-custom fw-semibold">Instructora de Zumba & Dance Fitness</p>
                            <p class="card-text text-muted mb-3">
                                Zumba® Instructor. Transformando workouts en fiestas de fitness desde 2015.
                            </p>
                            <div class="coach-especialidades mb-3">
                                <span class="badge bg-primary-custom me-1">Zumba</span>
                                <span class="badge bg-primary-custom me-1">Dance</span>
                                <span class="badge bg-primary-custom">Cardio</span>
                            </div>
                            <div class="coach-horarios mb-3">
                                <small class="text-muted">
                                    <i class="bi bi-clock me-1"></i>
                                    Lunes a Viernes: 17:00 - 21:00
                                </small>
                            </div>
                            <button class="btn btn-outline-custom btn-sm" onclick="mostrarModalCoach('laura')">
                                <i class="bi bi-person-lines-fill me-1"></i>Ver Perfil
                            </button>
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
    <script src="js/coaches.js"></script>
</body>
</html>