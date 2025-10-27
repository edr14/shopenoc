// Lógica específica para la página de coaches
document.addEventListener('DOMContentLoaded', function() {
    console.log('Página de coaches cargada');
    
    // Inicializar filtros
    setupFiltrosEspecialidades();
    
    // Configurar cards de coaches
    setupCoachCards();
    
    // Configurar búsqueda
    setupBusquedaCoaches();
});

// Configurar filtros por especialidad
function setupFiltrosEspecialidades() {
    const filtroEspecialidades = document.getElementById('filtroEspecialidades');
    const botones = filtroEspecialidades.querySelectorAll('.btn');
    const gridCoaches = document.getElementById('gridCoaches');
    
    botones.forEach(boton => {
        boton.addEventListener('click', function() {
            // Remover clase active de todos los botones
            botones.forEach(btn => btn.classList.remove('active'));
            // Agregar clase active al botón clickeado
            this.classList.add('active');
            
            const especialidad = this.getAttribute('data-especialidad');
            filtrarPorEspecialidad(especialidad);
        });
    });
}

// Filtrar coaches por especialidad
function filtrarPorEspecialidad(especialidad) {
    const coaches = document.querySelectorAll('.coach-card');
    
    coaches.forEach(coach => {
        const especialidadesCoach = coach.getAttribute('data-especialidad');
        
        if (especialidad === 'all' || especialidadesCoach.includes(especialidad)) {
            coach.style.display = 'block';
            // Animación de aparición
            coach.style.opacity = '0';
            coach.style.transform = 'translateY(20px)';
            setTimeout(() => {
                coach.style.opacity = '1';
                coach.style.transform = 'translateY(0)';
                coach.style.transition = 'all 0.5s ease';
            }, 100);
        } else {
            coach.style.display = 'none';
        }
    });
    
    // Mostrar mensaje de filtro aplicado
    if (especialidad !== 'all') {
        FitLife.showNotification(`Mostrando coaches de ${capitalizeFirst(especialidad)}`, 'info');
    }
}

// Configurar cards de coaches
function setupCoachCards() {
    const coachCards = document.querySelectorAll('.coach-card');
    
    coachCards.forEach(card => {
        // Efecto hover mejorado
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px) scale(1.02)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
        
        // Click en toda la card (excepto botones)
        card.addEventListener('click', function(e) {
            if (!e.target.closest('button')) {
                const coachName = this.querySelector('.card-title').textContent;
                const coachId = coachName.toLowerCase().split(' ')[0];
                mostrarModalCoach(coachId);
            }
        });
    });
}

// Configurar búsqueda de coaches
function setupBusquedaCoaches() {
    // Crear input de búsqueda si no existe
    const filtroContainer = document.getElementById('filtroEspecialidades').parentNode;
    const searchHTML = `
        <div class="row mt-3">
            <div class="col-md-6 mx-auto">
                <div class="input-group">
                    <input type="text" class="form-control" id="busquedaCoach" placeholder="Buscar coach por nombre o especialidad...">
                    <button class="btn btn-primary-custom" type="button" id="btnBuscarCoach">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </div>
        </div>
    `;
    
    filtroContainer.insertAdjacentHTML('afterend', searchHTML);
    
    // Configurar evento de búsqueda
    const inputBusqueda = document.getElementById('busquedaCoach');
    const btnBuscar = document.getElementById('btnBuscarCoach');
    
    inputBusqueda.addEventListener('input', function() {
        buscarCoaches(this.value);
    });
    
    btnBuscar.addEventListener('click', function() {
        buscarCoaches(inputBusqueda.value);
    });
}

// Buscar coaches
function buscarCoaches(termino) {
    const coaches = document.querySelectorAll('.coach-card');
    const terminoLower = termino.toLowerCase();
    
    if (terminoLower === '') {
        // Mostrar todos si no hay término de búsqueda
        coaches.forEach(coach => {
            coach.style.display = 'block';
        });
        return;
    }
    
    coaches.forEach(coach => {
        const nombre = coach.querySelector('.card-title').textContent.toLowerCase();
        const especialidad = coach.querySelector('.fw-semibold').textContent.toLowerCase();
        const descripcion = coach.querySelector('.card-text').textContent.toLowerCase();
        const especialidades = coach.getAttribute('data-especialidad').toLowerCase();
        
        const coincide = nombre.includes(terminoLower) || 
                        especialidad.includes(terminoLower) || 
                        descripcion.includes(terminoLower) ||
                        especialidades.includes(terminoLower);
        
        coach.style.display = coincide ? 'block' : 'none';
        
        if (coincide) {
            // Efecto de highlight
            coach.style.animation = 'highlight 1s ease';
        }
    });
}

// Mostrar modal del coach
function mostrarModalCoach(coachId) {
    const coachesData = {
        'ana': {
            nombre: 'Ana Martínez',
            titulo: 'Especialista en Yoga & Mindfulness',
            experiencia: '+8 años',
            certificaciones: ['Yoga Alliance RYT-500', 'Mindfulness Meditation Teacher', 'Pilates Mat Certification'],
            bio: 'Apasionada por el bienestar integral. Especializada en yoga terapéutico y meditación para reducir el estrés y mejorar la calidad de vida.',
            horarios: ['Lunes a Viernes: 6:00 - 14:00', 'Sábados: 7:00 - 12:00'],
            contacto: 'ana.martinez@fitlifeclub.com'
        },
        'miguel': {
            nombre: 'Miguel Torres',
            titulo: 'Head Coach CrossFit',
            experiencia: '+10 años',
            certificaciones: ['CrossFit Level 3 Trainer', 'NASM Certified Personal Trainer', 'Precision Nutrition L1'],
            bio: 'Transformando vidas a través del functional fitness. Especializado en preparación para competencias y atletas avanzados.',
            horarios: ['Lunes a Sábado: 5:00 - 12:00', 'Domingos: 8:00 - 11:00'],
            contacto: 'miguel.torres@fitlifeclub.com'
        },
        'carlos': {
            nombre: 'Carlos Rodríguez',
            titulo: 'Especialista en Cycling',
            experiencia: '+6 años',
            certificaciones: ['Schwinn Cycling Certified', 'ACE Group Fitness Instructor', 'CPR/AED Certified'],
            bio: 'Energía pura sobre dos ruedas. Creando experiencias de cycling únicas que desafían y motivan.',
            horarios: ['Lunes a Viernes: 7:00 - 15:00'],
            contacto: 'carlos.rodriguez@fitlifeclub.com'
        },
        'sofia': {
            nombre: 'Sofia López',
            titulo: 'Nutricionista Deportiva',
            experiencia: '+7 años',
            certificaciones: ['Licenciada en Nutrición', 'Especialista en Nutrición Deportiva', 'Coach en Hábitos Saludables'],
            bio: 'Comprometida con tu salud desde la alimentación. Planes nutricionales personalizados para alcanzar tus metas específicas.',
            horarios: ['Martes a Sábado: 9:00 - 17:00'],
            contacto: 'sofia.lopez@fitlifeclub.com'
        },
        'david': {
            nombre: 'David Chen',
            titulo: 'Especialista en Transformación Corporal',
            experiencia: '+9 años',
            certificaciones: ['NASM Certified Personal Trainer', 'FMS Level 1', 'TRX Suspension Training'],
            bio: 'Especializado en transformaciones corporales completas. Enfoque científico y resultados medibles.',
            horarios: ['Lunes a Viernes: 14:00 - 22:00'],
            contacto: 'david.chen@fitlifeclub.com'
        },
        'laura': {
            nombre: 'Laura González',
            titulo: 'Instructora de Zumba & Dance Fitness',
            experiencia: '+8 años',
            certificaciones: ['Zumba® Instructor', 'BOKWA® Fitness', 'Bachata Fitness Certified'],
            bio: 'Donde el fitness se encuentra con la fiesta. Creando experiencias divertidas que hacen olvidar que estás ejercitándote.',
            horarios: ['Lunes a Viernes: 17:00 - 21:00'],
            contacto: 'laura.gonzalez@fitlifeclub.com'
        }
    };
    
    const coach = coachesData[coachId];
    if (!coach) return;
    
    const modalHTML = `
        <div class="modal fade" id="modalCoach" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Perfil de ${coach.nombre}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <img src="assets/images/coach-${coachId}.jpg" alt="${coach.nombre}" class="img-fluid rounded-circle mb-3" width="200" height="200">
                                <h5>${coach.titulo}</h5>
                                <p class="text-muted">${coach.experiencia} de experiencia</p>
                            </div>
                            <div class="col-md-8">
                                <h6 class="fw-bold">Biografía</h6>
                                <p class="mb-3">${coach.bio}</p>
                                
                                <h6 class="fw-bold mt-4">Certificaciones</h6>
                                <ul class="list-unstyled">
                                    ${coach.certificaciones.map(cert => `<li class="mb-1"><i class="bi bi-award text-primary-custom me-2"></i>${cert}</li>`).join('')}
                                </ul>
                                
                                <h6 class="fw-bold mt-4">Horarios de Disponibilidad</h6>
                                <ul class="list-unstyled">
                                    ${coach.horarios.map(horario => `<li class="mb-1"><i class="bi bi-clock text-primary-custom me-2"></i>${horario}</li>`).join('')}
                                </ul>
                                
                                <h6 class="fw-bold mt-4">Contacto</h6>
                                <p><i class="bi bi-envelope text-primary-custom me-2"></i>${coach.contacto}</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary-custom" onclick="solicitarSesion('${coachId}')">
                            <i class="bi bi-calendar-check me-2"></i>Solicitar Sesión
                        </button>
                    </div>
                </div>
            </div>
        </div>
    `;
    
    // Remover modal existente
    const modalExistente = document.getElementById('modalCoach');
    if (modalExistente) {
        modalExistente.remove();
    }
    
    // Agregar nuevo modal
    document.body.insertAdjacentHTML('beforeend', modalHTML);
    
    // Mostrar modal
    const modal = new bootstrap.Modal(document.getElementById('modalCoach'));
    modal.show();
}

// Solicitar sesión con coach
function solicitarSesion(coachId) {
    FitLife.showNotification(`Solicitud enviada al coach. Te contactaremos pronto para coordinar tu sesión.`, 'success');
    
    // Cerrar modal
    const modal = bootstrap.Modal.getInstance(document.getElementById('modalCoach'));
    modal.hide();
}

// Utilidades
function capitalizeFirst(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}

// Gestor de coaches
const CoachesManager = {
    // Obtener coaches por especialidad
    obtenerCoachesPorEspecialidad: function(especialidad) {
        const coaches = document.querySelectorAll('.coach-card');
        return Array.from(coaches).filter(coach => {
            const especialidades = coach.getAttribute('data-especialidad');
            return especialidades.includes(especialidad);
        });
    },
    
    // Obtener coach más popular
    obtenerCoachPopular: function() {
        // Simular datos de popularidad
        return 'Ana Martínez';
    }
};

// Exportar para uso global
window.CoachesManager = CoachesManager;
window.mostrarModalCoach = mostrarModalCoach;

// CSS adicional para efectos
const style = document.createElement('style');
style.textContent = `
    @keyframes highlight {
        0% { background-color: transparent; }
        50% { background-color: rgba(0, 102, 204, 0.1); }
        100% { background-color: transparent; }
    }
    
    .coach-card {
        transition: all 0.3s ease;
        cursor: pointer;
    }
    
    .coach-avatar img {
        transition: transform 0.3s ease;
    }
    
    .coach-card:hover .coach-avatar img {
        transform: scale(1.1);
    }
`;
document.head.appendChild(style);