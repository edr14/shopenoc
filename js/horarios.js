// Lógica específica para la página de horarios
document.addEventListener('DOMContentLoaded', function() {
    console.log('Página de horarios cargada');
    
    // Inicializar filtros
    setupFiltrosDias();
    
    // Configurar eventos de la tabla
    setupTablaHorarios();
    
    // Mostrar horario del día actual
    mostrarHorarioDiaActual();
});

// Configurar filtros por día
function setupFiltrosDias() {
    const filtroDias = document.getElementById('filtroDias');
    const botones = filtroDias.querySelectorAll('.btn');
    const tabla = document.getElementById('tablaHorarios');
    
    botones.forEach(boton => {
        boton.addEventListener('click', function() {
            // Remover clase active de todos los botones
            botones.forEach(btn => btn.classList.remove('active'));
            // Agregar clase active al botón clickeado
            this.classList.add('active');
            
            const diaSeleccionado = this.getAttribute('data-dia');
            filtrarPorDia(diaSeleccionado);
        });
    });
}

// Filtrar horarios por día
function filtrarPorDia(dia) {
    const tabla = document.getElementById('tablaHorarios');
    const filas = tabla.querySelectorAll('tbody tr');
    const columnas = {
        'lunes': 1, 'martes': 2, 'miercoles': 3, 
        'jueves': 4, 'viernes': 5, 'sabado': 6
    };
    
    filas.forEach(fila => {
        if (dia === 'all') {
            fila.style.display = '';
        } else {
            const columnaIndex = columnas[dia];
            const celda = fila.cells[columnaIndex];
            const tieneClase = !celda.querySelector('.badge-secondary');
            
            fila.style.display = tieneClase ? '' : 'none';
        }
    });
    
    // Mostrar mensaje de filtro aplicado
    if (dia !== 'all') {
        FitLife.showNotification(`Mostrando horarios del ${capitalizeFirst(dia)}`, 'info');
    }
}

// Mostrar horario del día actual
function mostrarHorarioDiaActual() {
    const diasSemana = ['domingo', 'lunes', 'martes', 'miercoles', 'jueves', 'viernes', 'sabado'];
    const hoy = new Date().getDay();
    const diaActual = diasSemana[hoy];
    
    // Solo activar si no es domingo
    if (diaActual !== 'domingo') {
        const botonDiaActual = document.querySelector(`[data-dia="${diaActual}"]`);
        if (botonDiaActual) {
            botonDiaActual.click();
        }
    }
}

// Configurar eventos de la tabla
function setupTablaHorarios() {
    const tabla = document.getElementById('tablaHorarios');
    const celdasHorario = tabla.querySelectorAll('td:not(:first-child)');
    
    celdasHorario.forEach(celda => {
        const badge = celda.querySelector('.badge');
        if (badage && !badge.classList.contains('bg-secondary')) {
            // Hacer la celda clickeable si tiene horario
            celda.style.cursor = 'pointer';
            celda.title = 'Click para más información';
            
            celda.addEventListener('click', function() {
                const clase = this.parentNode.cells[0].querySelector('strong').textContent;
                const horario = this.querySelector('.badge').textContent;
                const dia = this.cellIndex - 1; // Índice del día
                
                mostrarModalClase(clase, horario, dia);
            });
        }
    });
}

// Mostrar modal con información de la clase
function mostrarModalClase(clase, horario, diaIndex) {
    const dias = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];
    const dia = dias[diaIndex];
    
    const infoClases = {
        'Yoga': {
            intensidad: 'Baja',
            duracion: '60 min',
            nivel: 'Todos los niveles',
            equipo: 'Mat de yoga',
            descripcion: 'Clase enfocada en flexibilidad, respiración y meditación.'
        },
        'Spinning': {
            intensidad: 'Alta',
            duracion: '60 min',
            nivel: 'Intermedio - Avanzado',
            equipo: 'Bicicleta spinning',
            descripcion: 'Entrenamiento cardiovascular intenso en bicicleta estática.'
        },
        'CrossFit': {
            intensidad: 'Muy Alta',
            duracion: '60 min',
            nivel: 'Avanzado',
            equipo: 'Variado',
            descripcion: 'Entrenamiento funcional de alta intensidad.'
        },
        'Zumba': {
            intensidad: 'Media',
            duracion: '60 min',
            nivel: 'Todos los niveles',
            equipo: 'Zapatos deportivos',
            descripcion: 'Baile fitness divertido con música latina.'
        },
        'Pilates': {
            intensidad: 'Baja - Media',
            duracion: '60 min',
            nivel: 'Todos los niveles',
            equipo: 'Mat de pilates',
            descripcion: 'Ejercicios de control corporal y fortalecimiento del core.'
        }
    };
    
    const info = infoClases[clase] || {};
    
    const modalHTML = `
        <div class="modal fade" id="modalClase" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">${clase} - ${dia}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>Horario:</strong> ${horario}</p>
                                <p><strong>Duración:</strong> ${info.duracion}</p>
                                <p><strong>Intensidad:</strong> ${info.intensidad}</p>
                                <p><strong>Nivel:</strong> ${info.nivel}</p>
                                <p><strong>Equipo necesario:</strong> ${info.equipo}</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Descripción:</strong></p>
                                <p>${info.descripcion}</p>
                                <div class="mt-3">
                                    <small class="text-muted">
                                        <i class="bi bi-info-circle me-1"></i>
                                        Llegar 10 minutos antes. Capacidad limitada.
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary-custom" onclick="reservarClase('${clase}', '${dia}', '${horario}')">
                            <i class="bi bi-calendar-plus me-2"></i>Reservar Clase
                        </button>
                    </div>
                </div>
            </div>
        </div>
    `;
    
    // Remover modal existente
    const modalExistente = document.getElementById('modalClase');
    if (modalExistente) {
        modalExistente.remove();
    }
    
    // Agregar nuevo modal
    document.body.insertAdjacentHTML('beforeend', modalHTML);
    
    // Mostrar modal
    const modal = new bootstrap.Modal(document.getElementById('modalClase'));
    modal.show();
}

// Función para reservar clase
function reservarClase(clase, dia, horario) {
    // Aquí iría la lógica de reserva real
    FitLife.showNotification(`¡Clase de ${clase} reservada para el ${dia} a las ${horario}!`, 'success');
    
    // Cerrar modal
    const modal = bootstrap.Modal.getInstance(document.getElementById('modalClase'));
    modal.hide();
}

// Utilidades
function capitalizeFirst(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}

// Gestor de horarios
const HorariosManager = {
    // Verificar disponibilidad de clase
    verificarDisponibilidad: function(clase, dia, horario) {
        // Simular verificación de disponibilidad
        return new Promise((resolve) => {
            setTimeout(() => {
                const disponible = Math.random() > 0.3; // 70% de probabilidad de disponible
                resolve(disponible);
            }, 500);
        });
    },
    
    // Obtener próximas clases del día
    obtenerProximasClases: function() {
        const ahora = new Date();
        const horaActual = ahora.getHours();
        
        // Simular datos de próximas clases
        return [
            { clase: 'Yoga', horario: '18:00 - 19:00', en: '2 horas' },
            { clase: 'Pilates', horario: '19:00 - 20:00', en: '3 horas' }
        ];
    }
};

// Exportar para uso global
window.HorariosManager = HorariosManager;