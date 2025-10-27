<?php
$pageTitle = "Mi Cuenta - FitLife Club";
$jsFiles = ['auth.js'];
include '../includes/header.php';

// Verificar si el usuario está logueado
if (!estaLogueado()) {
    header('Location: login.php');
    exit;
}

$userNombre = $_SESSION['user_nombre'];
$userEmail = $_SESSION['user_email'];
$userRol = $_SESSION['user_rol'];
?>

<!-- Hero Section -->
<section class="hero-section" style="min-height: 30vh; padding: 140px 0 40px;">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-8 mx-auto">
                <h1 class="hero-title mb-4">Mi Cuenta</h1>
                <p class="hero-subtitle">Bienvenido de vuelta, <?php echo $userNombre; ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Información de la Cuenta -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card card-custom">
                    <div class="card-body p-4">
                        <h4 class="card-title mb-4">Información de tu Cuenta</h4>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <strong>Nombre:</strong>
                                <p><?php echo $userNombre; ?></p>
                            </div>
                            <div class="col-md-6 mb-3">
                                <strong>Email:</strong>
                                <p><?php echo $userEmail; ?></p>
                            </div>
                            <div class="col-md-6 mb-3">
                                <strong>Rol:</strong>
                                <p>
                                    <span class="badge bg-primary-custom">
                                        <?php echo ucfirst($userRol); ?>
                                    </span>
                                </p>
                            </div>
                            <div class="col-md-6 mb-3">
                                <strong>Estado:</strong>
                                <p><span class="badge bg-success">Activo</span></p>
                            </div>
                        </div>

                        <div class="mt-4">
                            <h5>Acciones Rápidas</h5>
                            <div class="d-flex flex-wrap gap-2 mt-3">
                                <a href="mis-reservas.php" class="btn btn-outline-custom">
                                    <i class="bi bi-calendar-check me-2"></i>Mis Reservas
                                </a>
                                <a href="editar-perfil.php" class="btn btn-outline-custom">
                                    <i class="bi bi-pencil me-2"></i>Editar Perfil
                                </a>
                                <?php if (esAdministrador()): ?>
                                    <a href="../admin/index.php" class="btn btn-primary-custom">
                                        <i class="bi bi-speedometer2 me-2"></i>Panel Admin
                                    </a>
                                <?php endif; ?>
                                <a href="logout.php" class="btn btn-danger">
                                    <i class="bi bi-box-arrow-right me-2"></i>Cerrar Sesión
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>