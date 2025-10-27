// Función auxiliar para mostrar notificaciones
function mostrarNotificacion(message, type = 'info') {
    const alertClass = {
        'success': 'alert-success',
        'error': 'alert-danger',
        'warning': 'alert-warning',
        'info': 'alert-info'
    }[type] || 'alert-info';

    const alertDiv = document.createElement('div');
    alertDiv.className = `alert ${alertClass} alert-dismissible fade show position-fixed`;
    alertDiv.style.cssText = 'top: 20px; right: 20px; z-index: 1050; min-width: 300px;';
    alertDiv.innerHTML = `
        ${message}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    `;
    
    document.body.appendChild(alertDiv);
    
    setTimeout(() => {
        if (alertDiv.parentNode) {
            alertDiv.remove();
        }
    }, 5000);
}

// Lógica de autenticación para login y gestión de sesiones
document.addEventListener('DOMContentLoaded', function() {
    console.log('✅ Sistema de autenticación cargado');
    
    // Verificar si hay una sesión activa
    verificarSesionActiva();
    
    // Configurar formulario de login
    setupLoginForm();
    
    // Configurar toggle de contraseña
    setupTogglePassword();
    
    // Configurar login social (simulado)
    setupLoginSocial();
});

// Verificar si hay una sesión activa
function verificarSesionActiva() {
    const token = localStorage.getItem('fitlife_token');
    const userData = localStorage.getItem('fitlife_user');
    
    if (token && userData) {
        // Si hay sesión activa y estamos en login, redirigir al dashboard
        if (window.location.pathname.includes('login.php')) {
            console.log('✅ Sesión activa detectada, redirigiendo...');
            window.location.href = 'mi-cuenta.php';
        }
    }
}

// Configurar formulario de login
function setupLoginForm() {
    const formulario = document.getElementById('formLogin');
    const btnLogin = document.getElementById('btnLogin');
    
    if (!formulario) {
        console.log('⚠️ Formulario de login no encontrado');
        return;
    }
    
    const spinner = btnLogin?.querySelector('.spinner-border');
    
    formulario.addEventListener('submit', async function(e) {
        e.preventDefault();
        
        console.log('📤 Intentando iniciar sesión...');
        
        if (!formulario.checkValidity()) {
            e.stopPropagation();
            formulario.classList.add('was-validated');
            return;
        }
        
        // Mostrar loading
        btnLogin.disabled = true;
        if (spinner) spinner.classList.remove('d-none');
        
        try {
            const formData = new FormData(formulario);
            const resultado = await iniciarSesion(formData);
            
            if (resultado.success) {
                console.log('✅ Login exitoso:', resultado.user.email);
                
                // Guardar sesión
                guardarSesionUsuario(resultado.user, resultado.token);
                
                mostrarNotificacion(`¡Bienvenido ${resultado.user.nombre}!`, 'success');
                
                // Redirigir después de 1 segundo
                setTimeout(() => {
                    window.location.href = 'mi-cuenta.php';
                }, 1000);
            } else {
                throw new Error(resultado.message || 'Error en el login');
            }
            
        } catch (error) {
            console.error('❌ Error en login:', error);
            mostrarNotificacion('Error: ' + error.message, 'error');
            btnLogin.disabled = false;
            if (spinner) spinner.classList.add('d-none');
        }
    });
}

// Configurar toggle de visibilidad de contraseña
function setupTogglePassword() {
    const toggleBtn = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');
    
    if (!toggleBtn || !passwordInput) return;
    
    toggleBtn.addEventListener('click', function() {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        
        // Cambiar icono
        const icon = this.querySelector('i');
        if (icon) {
            icon.className = type === 'password' ? 'bi bi-eye' : 'bi bi-eye-slash';
        }
    });
}

// Configurar login social (simulado)
function setupLoginSocial() {
    window.loginConGoogle = function() {
        mostrarNotificacion('Iniciando sesión con Google...', 'info');
        setTimeout(() => {
            mostrarNotificacion('Funcionalidad de Google Login en desarrollo', 'warning');
        }, 1000);
    };
    
    window.loginConFacebook = function() {
        mostrarNotificacion('Iniciando sesión con Facebook...', 'info');
        setTimeout(() => {
            mostrarNotificacion('Funcionalidad de Facebook Login en desarrollo', 'warning');
        }, 1000);
    };
}

// Iniciar sesión
async function iniciarSesion(formData) {
    try {
        const datos = {
            email: formData.get('email'),
            password: formData.get('password')
        };

        console.log('📝 Enviando credenciales...');

        const response = await fetch('../api/auth.php?action=login', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(datos)
        });

        console.log('📡 Respuesta status:', response.status);

        const text = await response.text();
        console.log('📄 Respuesta texto:', text.substring(0, 200));

        let resultado;
        try {
            resultado = JSON.parse(text);
        } catch (e) {
            console.error('❌ Error parseando JSON:', e);
            throw new Error('Error del servidor: respuesta inválida');
        }

        if (resultado.success) {
            return resultado;
        } else {
            throw new Error(resultado.message);
        }
    } catch (error) {
        console.error('❌ Error en iniciarSesion:', error);
        throw new Error('Error de conexión: ' + error.message);
    }
}

// Guardar sesión del usuario
function guardarSesionUsuario(user, token) {
    console.log('💾 Guardando sesión de usuario:', user.email);
    
    localStorage.setItem('fitlife_token', token);
    localStorage.setItem('fitlife_user', JSON.stringify(user));
    
    // También guardar en sessionStorage para mayor seguridad
    sessionStorage.setItem('fitlife_session', 'active');
    
    // Establecer cookie (opcional)
    document.cookie = `fitlife_auth=${token}; path=/; max-age=86400`; // 24 horas
}

// Cerrar sesión
function cerrarSesion() {
    console.log('🚪 Cerrando sesión...');
    
    localStorage.removeItem('fitlife_token');
    localStorage.removeItem('fitlife_user');
    sessionStorage.removeItem('fitlife_session');
    document.cookie = 'fitlife_auth=; path=/; expires=Thu, 01 Jan 1970 00:00:00 GMT';
    
    mostrarNotificacion('Sesión cerrada correctamente', 'info');
    
    // Redirigir al login después de 1 segundo
    setTimeout(() => {
        window.location.href = 'login.php';
    }, 1000);
}

// Verificar autenticación en páginas protegidas
function verificarAutenticacion() {
    const token = localStorage.getItem('fitlife_token');
    const userData = localStorage.getItem('fitlife_user');
    
    if (!token || !userData) {
        window.location.href = 'login.php?error=no_autenticado';
        return null;
    }
    
    try {
        const user = JSON.parse(userData);
        return user;
    } catch (error) {
        cerrarSesion();
        return null;
    }
}

// Obtener datos del usuario actual
function obtenerUsuarioActual() {
    const userData = localStorage.getItem('fitlife_user');
    if (!userData) return null;
    
    try {
        return JSON.parse(userData);
    } catch (error) {
        return null;
    }
}

// Verificar si el usuario es administrador
function esAdministrador() {
    const user = obtenerUsuarioActual();
    return user && user.rol === 'admin';
}

// Gestor de autenticación
const AuthManager = {
    // Iniciar sesión
    login: async function(email, password) {
        const formData = new FormData();
        formData.append('email', email);
        formData.append('password', password);
        return await iniciarSesion(formData);
    },
    
    // Cerrar sesión
    logout: function() {
        cerrarSesion();
    },
    
    // Verificar estado de autenticación
    isAuthenticated: function() {
        return !!localStorage.getItem('fitlife_token');
    },
    
    // Obtener token
    getToken: function() {
        return localStorage.getItem('fitlife_token');
    },
    
    // Obtener usuario
    getUser: function() {
        return obtenerUsuarioActual();
    },
    
    // Verificar permisos de administrador
    isAdmin: function() {
        return esAdministrador();
    }
};

// Exportar para uso global
window.AuthManager = AuthManager;
window.cerrarSesion = cerrarSesion;
window.verificarAutenticacion = verificarAutenticacion;