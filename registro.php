<?php
$pageTitle = "Registro - FitLife Club";
// main.js debe ir PRIMERO para definir FitLife
$jsFiles = ['main.js', 'registro.js'];
include '../includes/header.php';
?>

    <!-- Hero Section Registro -->
    <section class="hero-section" style="min-height: 40vh; padding: 140px 0 40px;">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 mx-auto">
                    <h1 class="hero-title mb-4">Únete a FitLife Club</h1>
                    <p class="hero-subtitle">Comienza tu journey hacia una vida más saludable y activa</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Formulario de Registro -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card card-custom">
                        <div class="card-body p-5">
                            <h3 class="card-title text-center mb-4">Crear Cuenta</h3>
                            
                            <form id="formRegistro" class="needs-validation" novalidate>
                                <!-- Información Personal -->
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="nombre" class="form-label">Nombre *</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                                        <div class="invalid-feedback">Por favor ingresa tu nombre.</div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="apellido" class="form-label">Apellido *</label>
                                        <input type="text" class="form-control" id="apellido" name="apellido" required>
                                        <div class="invalid-feedback">Por favor ingresa tu apellido.</div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="email" class="form-label">Email *</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                        <div class="invalid-feedback">Por favor ingresa un email válido.</div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="telefono" class="form-label">Teléfono</label>
                                        <input type="tel" class="form-control" id="telefono" name="telefono">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento *</label>
                                        <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
                                        <div class="invalid-feedback">Por favor ingresa tu fecha de nacimiento.</div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="genero" class="form-label">Género</label>
                                        <select class="form-select" id="genero" name="genero">
                                            <option value="">Seleccionar...</option>
                                            <option value="masculino">Masculino</option>
                                            <option value="femenino">Femenino</option>
                                            <option value="otro">Otro</option>
                                            <option value="prefiero-no-decir">Prefiero no decir</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Información de Cuenta -->
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="password" class="form-label">Contraseña *</label>
                                        <input type="password" class="form-control" id="password" name="password" required minlength="8">
                                        <div class="invalid-feedback">La contraseña debe tener al menos 8 caracteres.</div>
                                        <div class="form-text">
                                            <small>Mínimo 8 caracteres, incluir mayúsculas, minúsculas y números.</small>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="confirm_password" class="form-label">Confirmar Contraseña *</label>
                                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                                        <div class="invalid-feedback">Las contraseñas no coinciden.</div>
                                    </div>
                                </div>

                                <!-- Selección de Membresía -->
                                <div class="mb-4">
                                    <h5 class="mb-3">Selecciona tu Membresía</h5>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <div class="card membership-card">
                                                <div class="card-body text-center">
                                                    <h6 class="card-title">Básica</h6>
                                                    <h4 class="text-primary-custom fw-bold">$499</h4>
                                                    <small class="text-muted">/mes</small>
                                                    <ul class="list-unstyled mt-3">
                                                        <li><i class="bi bi-check text-success me-2"></i>Acceso a gimnasio</li>
                                                        <li><i class="bi bi-check text-success me-2"></i>Clases grupales</li>
                                                        <li><i class="bi bi-x text-danger me-2"></i>Entrenamiento personal</li>
                                                        <li><i class="bi bi-x text-danger me-2"></i>Asesoría nutricional</li>
                                                    </ul>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="membresia" id="membresia_basica" value="basica" checked>
                                                        <label class="form-check-label" for="membresia_basica">
                                                            Seleccionar
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card membership-card featured">
                                                <div class="card-body text-center">
                                                    <span class="badge bg-warning">Popular</span>
                                                    <h6 class="card-title">Premium</h6>
                                                    <h4 class="text-primary-custom fw-bold">$899</h4>
                                                    <small class="text-muted">/mes</small>
                                                    <ul class="list-unstyled mt-3">
                                                        <li><i class="bi bi-check text-success me-2"></i>Acceso a gimnasio</li>
                                                        <li><i class="bi bi-check text-success me-2"></i>Clases grupales</li>
                                                        <li><i class="bi bi-check text-success me-2"></i>4 sesiones personal/mes</li>
                                                        <li><i class="bi bi-x text-danger me-2"></i>Asesoría nutricional</li>
                                                    </ul>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="membresia" id="membresia_premium" value="premium">
                                                        <label class="form-check-label" for="membresia_premium">
                                                            Seleccionar
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card membership-card">
                                                <div class="card-body text-center">
                                                    <h6 class="card-title">VIP</h6>
                                                    <h4 class="text-primary-custom fw-bold">$1,299</h4>
                                                    <small class="text-muted">/mes</small>
                                                    <ul class="list-unstyled mt-3">
                                                        <li><i class="bi bi-check text-success me-2"></i>Acceso ilimitado</li>
                                                        <li><i class="bi bi-check text-success me-2"></i>Clases grupales</li>
                                                        <li><i class="bi bi-check text-success me-2"></i>8 sesiones personal/mes</li>
                                                        <li><i class="bi bi-check text-success me-2"></i>Asesoría nutricional</li>
                                                    </ul>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="membresia" id="membresia_vip" value="vip">
                                                        <label class="form-check-label" for="membresia_vip">
                                                            Seleccionar
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Términos y Condiciones -->
                                <div class="mb-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="terminos" name="terminos" required>
                                        <label class="form-check-label" for="terminos">
                                            Acepto los <a href="#" data-bs-toggle="modal" data-bs-target="#modalTerminos">términos y condiciones</a> *
                                        </label>
                                        <div class="invalid-feedback">Debes aceptar los términos y condiciones.</div>
                                    </div>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="newsletter" name="newsletter">
                                        <label class="form-check-label" for="newsletter">
                                            Deseo recibir información sobre promociones y novedades
                                        </label>
                                    </div>
                                </div>

                                <!-- Botón de Registro -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary-custom btn-lg" id="btnRegistro">
                                        <span class="spinner-border spinner-border-sm me-2 d-none" role="status" aria-hidden="true"></span>
                                        Crear Cuenta
                                    </button>
                                </div>

                                <div class="text-center mt-3">
                                    <p class="text-muted">¿Ya tienes cuenta? <a href="login.php" class="text-primary-custom">Inicia sesión aquí</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Términos y Condiciones -->
    <div class="modal fade" id="modalTerminos" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Términos y Condiciones</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <h6>1. Membresía y Pagos</h6>
                    <p>La membresía se renueva automáticamente cada mes. Puedes cancelar con 30 días de anticipación.</p>
                    
                    <h6>2. Uso de Instalaciones</h6>
                    <p>El acceso está sujeto al reglamento interno del club. Se requiere vestimenta deportiva adecuada.</p>
                    
                    <h6>3. Cancelaciones</h6>
                    <p>Las cancelaciones de sesiones deben realizarse con 24 horas de anticipación.</p>
                    
                    <h6>4. Privacidad</h6>
                    <p>Respetamos tu privacidad y protegemos tus datos personales según la ley aplicable.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

<?php include '../includes/footer.php'; ?>