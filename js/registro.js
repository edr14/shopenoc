// Versión independiente de registro.js
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

// Lógica específica para el registro de usuarios
document.addEventListener('DOMContentLoaded', function() {
    console.log('🚀 Página de registro cargada');
    
    // Configurar validación personalizada
    setupValidacionPersonalizada();
    
    // Configurar tarjetas de membresía
    setupMembresiaCards();
    
    // Configurar verificación de contraseña
    setupVerificacionPassword();
    
    // Configurar envío del formulario
    setupEnvioFormulario();
});

// Configurar validación personalizada
function setupValidacionPersonalizada() {
    const fechaNacimiento = document.getElementById('fecha_nacimiento');
    if (fechaNacimiento) {
        fechaNacimiento.addEventListener('change', function() {
            const fecha = new Date(this.value);
            const hoy = new Date();
            let edad = hoy.getFullYear() - fecha.getFullYear();
            const mes = hoy.getMonth() - fecha.getMonth();
            
            // CORREGIDO: Cambiar const por let
            if (mes < 0 || (mes === 0 && hoy.getDate() < fecha.getDate())) {
                edad--;
            }
            
            if (edad < 18) {
                this.setCustomValidity('Debes ser mayor de 18 años para registrarte.');
            } else {
                this.setCustomValidity('');
            }
        });
    }
}

// Configurar tarjetas de membresía
function setupMembresiaCards() {
    const cards = document.querySelectorAll('.membership-card');
    
    cards.forEach(card => {
        const radio = card.querySelector('input[type="radio"]');
        
        if (!radio) return;
        
        card.addEventListener('click', function(e) {
            if (!e.target.closest('input')) {
                radio.checked = true;
                actualizarSeleccionMembresia();
            }
        });
        
        radio.addEventListener('change', function() {
            actualizarSeleccionMembresia();
        });
    });
    
    // Selección inicial
    actualizarSeleccionMembresia();
}

// Actualizar visualización de membresía seleccionada
function actualizarSeleccionMembresia() {
    const cards = document.querySelectorAll('.membership-card');
    
    cards.forEach(card => {
        const radio = card.querySelector('input[type="radio"]');
        
        if (radio && radio.checked) {
            card.classList.add('selected');
            card.style.borderColor = '#0066cc';
            card.style.boxShadow = '0 4px 15px rgba(0, 102, 204, 0.2)';
        } else {
            card.classList.remove('selected');
            card.style.borderColor = '';
            card.style.boxShadow = '';
        }
    });
}

// Configurar verificación de contraseña
function setupVerificacionPassword() {
    const password = document.getElementById('password');
    const confirmPassword = document.getElementById('confirm_password');
    
    if (!password || !confirmPassword) return;
    
    function validarPassword() {
        if (password.value !== confirmPassword.value) {
            confirmPassword.setCustomValidity('Las contraseñas no coinciden.');
        } else {
            confirmPassword.setCustomValidity('');
        }
    }
    
    password.addEventListener('input', validarPassword);
    confirmPassword.addEventListener('input', validarPassword);
}

// Configurar envío del formulario
function setupEnvioFormulario() {
    const formulario = document.getElementById('formRegistro');
    const btnRegistro = document.getElementById('btnRegistro');
    
    if (!formulario || !btnRegistro) {
        console.error('❌ Formulario o botón no encontrado');
        return;
    }
    
    const spinner = btnRegistro.querySelector('.spinner-border');
    
    formulario.addEventListener('submit', async function(e) {
        e.preventDefault();
        
        console.log('📤 Formulario enviado');
        
        if (!formulario.checkValidity()) {
            e.stopPropagation();
            formulario.classList.add('was-validated');
            mostrarNotificacion('Por favor completa todos los campos requeridos', 'warning');
            return;
        }
        
        // Mostrar loading
        btnRegistro.disabled = true;
        if (spinner) spinner.classList.remove('d-none');
        
        try {
            const resultado = await enviarDatosRegistro(new FormData(formulario));
            
            console.log('✅ Registro exitoso:', resultado);
            
            // Éxito
            mostrarNotificacion('¡Registro exitoso! Redirigiendo al login...', 'success');
            
            // Redirigir después de 2 segundos
            setTimeout(() => {
                window.location.href = 'login.php?registro=exitoso';
            }, 2000);
            
        } catch (error) {
            console.error('❌ Error en registro:', error);
            
            // Error
            mostrarNotificacion(error.message || 'Error en el registro. Por favor intenta nuevamente.', 'error');
            btnRegistro.disabled = false;
            if (spinner) spinner.classList.add('d-none');
        }
    });
}

// Enviar datos de registro a la API
async function enviarDatosRegistro(formData) {
    try {
        const datos = {
            nombre: formData.get('nombre'),
            apellido: formData.get('apellido'),
            email: formData.get('email'),
            password: formData.get('password'),
            telefono: formData.get('telefono') || null,
            fecha_nacimiento: formData.get('fecha_nacimiento') || null,
            genero: formData.get('genero') || null,
            membresia: formData.get('membresia') || 'basica'
        };

        console.log('📝 Enviando datos:', datos);

        // ✅ USAR auth.php (NO debug.php)
        const response = await fetch('../api/auth.php?action=registro', {
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
            console.error('Respuesta completa:', text);
            throw new Error('Error del servidor: La API devolvió una respuesta inválida');
        }

        console.log('✅ Resultado parseado:', resultado);

        if (resultado.success) {
            return resultado;
        } else {
            throw new Error(resultado.message || 'Error desconocido en el registro');
        }
    } catch (error) {
        console.error('❌ Error en enviarDatosRegistro:', error);
        
        if (error.message.includes('Failed to fetch')) {
            throw new Error('Error de conexión: No se pudo conectar con el servidor');
        }
        
        throw error;
    }
}