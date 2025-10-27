<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horarios - FitLife Club</title>
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
                        <a class="nav-link nav-link-custom active" href="horarios.php">Horarios</a>
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

    <!-- Hero Section Horarios -->
    <section class="hero-section" style="min-height: 50vh; padding: 140px 0 60px;">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 mx-auto">
                    <h1 class="hero-title mb-4">Horarios de Clases</h1>
                    <p class="hero-subtitle">Planifica tu semana con nuestras clases grupales y sesiones personalizadas</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Horarios Section -->
    <section class="section-padding bg-light">
        <div class="container">
            <!-- Filtros por día -->
            <div class="row mb-5">
                <div class="col-12">
                    <div class="card card-custom">
                        <div class="card-body">
                            <h4 class="card-title text-center mb-4">Filtrar por Día</h4>
                            <div class="d-flex flex-wrap justify-content-center gap-2" id="filtroDias">
                                <button class="btn btn-outline-custom active" data-dia="all">Todos los Días</button>
                                <button class="btn btn-outline-custom" data-dia="lunes">Lunes</button>
                                <button class="btn btn-outline-custom" data-dia="martes">Martes</button>
                                <button class="btn btn-outline-custom" data-dia="miercoles">Miércoles</button>
                                <button class="btn btn-outline-custom" data-dia="jueves">Jueves</button>
                                <button class="btn btn-outline-custom" data-dia="viernes">Viernes</button>
                                <button class="btn btn-outline-custom" data-dia="sabado">Sábado</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tabla de Horarios -->
            <div class="row">
                <div class="col-12">
                    <div class="card card-custom">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover" id="tablaHorarios">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>Clase</th>
                                            <th>Lunes</th>
                                            <th>Martes</th>
                                            <th>Miércoles</th>
                                            <th>Jueves</th>
                                            <th>Viernes</th>
                                            <th>Sábado</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Yoga -->
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="icon-wrapper bg-success me-3">
                                                        <i class="bi bi-flower1 text-white"></i>
                                                    </div>
                                                    <div>
                                                        <strong>Yoga</strong>
                                                        <br>
                                                        <small class="text-muted">Ana Martínez</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-primary-custom">6:00 - 7:00</span></td>
                                            <td><span class="badge bg-primary-custom">6:00 - 7:00</span></td>
                                            <td><span class="badge bg-primary-custom">6:00 - 7:00</span></td>
                                            <td><span class="badge bg-primary-custom">6:00 - 7:00</span></td>
                                            <td><span class="badge bg-primary-custom">6:00 - 7:00</span></td>
                                            <td><span class="badge bg-primary-custom">7:00 - 8:00</span></td>
                                        </tr>
                                        
                                        <!-- Spinning -->
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="icon-wrapper bg-warning me-3">
                                                        <i class="bi bi-bicycle text-white"></i>
                                                    </div>
                                                    <div>
                                                        <strong>Spinning</strong>
                                                        <br>
                                                        <small class="text-muted">Carlos Rodríguez</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-primary-custom">7:00 - 8:00</span></td>
                                            <td><span class="badge bg-primary-custom">7:00 - 8:00</span></td>
                                            <td><span class="badge bg-primary-custom">7:00 - 8:00</span></td>
                                            <td><span class="badge bg-primary-custom">7:00 - 8:00</span></td>
                                            <td><span class="badge bg-primary-custom">7:00 - 8:00</span></td>
                                            <td><span class="badge bg-primary-custom">8:00 - 9:00</span></td>
                                        </tr>
                                        
                                        <!-- CrossFit -->
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="icon-wrapper bg-danger me-3">
                                                        <i class="bi bi-lightning text-white"></i>
                                                    </div>
                                                    <div>
                                                        <strong>CrossFit</strong>
                                                        <br>
                                                        <small class="text-muted">Miguel Torres</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-primary-custom">8:00 - 9:00</span></td>
                                            <td><span class="badge bg-primary-custom">8:00 - 9:00</span></td>
                                            <td><span class="badge bg-primary-custom">8:00 - 9:00</span></td>
                                            <td><span class="badge bg-primary-custom">8:00 - 9:00</span></td>
                                            <td><span class="badge bg-primary-custom">8:00 - 9:00</span></td>
                                            <td><span class="badge bg-primary-custom">9:00 - 10:00</span></td>
                                        </tr>
                                        
                                        <!-- Zumba -->
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="icon-wrapper bg-info me-3">
                                                        <i class="bi bi-music-note-beamed text-white"></i>
                                                    </div>
                                                    <div>
                                                        <strong>Zumba</strong>
                                                        <br>
                                                        <small class="text-muted">Laura González</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-primary-custom">17:00 - 18:00</span></td>
                                            <td><span class="badge bg-primary-custom">17:00 - 18:00</span></td>
                                            <td><span class="badge bg-primary-custom">17:00 - 18:00</span></td>
                                            <td><span class="badge bg-primary-custom">17:00 - 18:00</span></td>
                                            <td><span class="badge bg-primary-custom">17:00 - 18:00</span></td>
                                            <td><span class="badge bg-secondary">No hay clase</span></td>
                                        </tr>
                                        
                                        <!-- Pilates -->
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="icon-wrapper bg-purple me-3">
                                                        <i class="bi bi-circle text-white"></i>
                                                    </div>
                                                    <div>
                                                        <strong>Pilates</strong>
                                                        <br>
                                                        <small class="text-muted">Sofia López</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-primary-custom">18:00 - 19:00</span></td>
                                            <td><span class="badge bg-primary-custom">18:00 - 19:00</span></td>
                                            <td><span class="badge bg-primary-custom">18:00 - 19:00</span></td>
                                            <td><span class="badge bg-primary-custom">18:00 - 19:00</span></td>
                                            <td><span class="badge bg-primary-custom">18:00 - 19:00</span></td>
                                            <td><span class="badge bg-secondary">No hay clase</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Información Adicional -->
            <div class="row mt-5">
                <div class="col-md-6 mb-4">
                    <div class="card card-custom h-100">
                        <div class="card-body">
                            <h5 class="card-title">
                                <i class="bi bi-info-circle text-primary-custom me-2"></i>
                                Información Importante
                            </h5>
                            <ul class="list-custom mt-3">
                                <li>Las clases tienen duración de 60 minutos</li>
                                <li>Llegar 10 minutos antes del inicio</li>
                                <li>Capacidad limitada - Reserva tu lugar</li>
                                <li>Traer toalla y botella de agua</li>
                                <li>Vestimenta deportiva adecuada</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 mb-4">
                    <div class="card card-custom h-100">
                        <div class="card-body">
                            <h5 class="card-title">
                                <i class="bi bi-clock-history text-primary-custom me-2"></i>
                                Horario del Gimnasio
                            </h5>
                            <div class="mt-3">
                                <div class="d-flex justify-content-between py-2 border-bottom">
                                    <span>Lunes - Viernes</span>
                                    <strong>5:00 AM - 10:00 PM</strong>
                                </div>
                                <div class="d-flex justify-content-between py-2 border-bottom">
                                    <span>Sábados</span>
                                    <strong>7:00 AM - 8:00 PM</strong>
                                </div>
                                <div class="d-flex justify-content-between py-2">
                                    <span>Domingos</span>
                                    <strong>8:00 AM - 6:00 PM</strong>
                                </div>
                            </div>
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
    <script src="js/horarios.js"></script>
</body>
</html>