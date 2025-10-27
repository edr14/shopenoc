// Lógica específica para la página de servicios
document.addEventListener('DOMContentLoaded', function() {
    console.log('Página de servicios cargada');
    
    // Configurar scroll suave para anclas internas
    setupServiceAnchors();
    
    // Configurar tooltips para precios
    setupPriceTooltips();
    
    // Animaciones para elementos de servicios
    setupServiceAnimations();
});

// Configurar anclas internas con offset para navbar fijo
function setupServiceAnchors() {
    const navbarHeight = 80; // Altura aproximada del navbar
    
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            
            // Solo aplicar para anclas internas de servicios
            if (href.startsWith('#') && href !== '#') {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    const targetPosition = target.offsetTop - navbarHeight;
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                    
                    // Actualizar URL sin recargar
                    history.pushState(null, null, href);
                }
            }
        });
    });
}

// Configurar tooltips informativos para precios
function setupPriceTooltips() {
    const priceElements = document.querySelectorAll('.h4.text-primary-custom');
    
    priceElements.forEach(price => {
        price.setAttribute('data-bs-toggle', 'tooltip');
        price.setAttribute('data-bs-placement', 'top');
        price.setAttribute('title', 'Precio mensual. Consulta por planes trimestrales y anuales con descuento.');
    });
    
    // Reinicializar tooltips
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
}

// Animaciones para elementos de servicios
function setupServiceAnimations() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '0';
                entry.target.style.transform = 'translateY(30px)';
                entry.target.style.transition = 'all 0.6s ease';
                
                setTimeout(() => {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }, 100);
                
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observar secciones de servicios
    document.querySelectorAll('.row.align-items-center').forEach(section => {
        observer.observe(section);
    });
}

// Funciones específicas de servicios
const ServiciosManager = {
    // Calcular costo basado en plan seleccionado
    calcularCostoPlan: function(plan, duracion = 'mensual') {
        const precios = {
            'personalizado': { mensual: 899, trimestral: 2397, anual: 8628 },
            'grupales': { mensual: 499, trimestral: 1347, anual: 4788 },
            'nutricion': { mensual: 699, trimestral: 1887, anual: 6788 }
        };
        
        const descuentos = {
            'trimestral': 0.9,  // 10% descuento
            'anual': 0.8        // 20% descuento
        };
        
        let precioBase = precios[plan]?.['mensual'] || 0;
        
        if (duracion !== 'mensual' && descuentos[duracion]) {
            precioBase = precios[plan]?.[duracion] || precioBase * 3 * descuentos[duracion];
        }
        
        return Math.round(precioBase);
    },
    
    // Mostrar modal de información de servicio
    mostrarInfoServicio: function(servicioId) {
        const serviciosInfo = {
            'personalizado': {
                titulo: 'Entrenamiento Personalizado',
                descripcion: 'Sesiones one-on-one con coach certificado. Incluye evaluación inicial, planificación mensual y seguimiento constante.',
                beneficios: [
                    'Plan completamente personalizado',
                    'Sesiones flexibles según tu horario',
                    'Ajustes en tiempo real',
                    'Acceso a app de seguimiento'
                ]
            },
            'grupales': {
                titulo: 'Clases Grupales',
                descripcion: 'Más de 20 clases diferentes semanales. Ambiente motivador y comunidad supportiva.',
                beneficios: [
                    'Horarios flexibles',
                    'Diferentes niveles',
                    'Comunidad activa',
                    'Sin costo adicional'
                ]
            },
            'nutricion': {
                titulo: 'Asesoría Nutricional',
                descripcion: 'Plan alimenticio personalizado con seguimiento semanal y ajustes según tu progreso.',
                beneficios: [
                    'Evaluación corporal completa',
                    'Plan de comidas personalizado',
                    'Seguimiento semanal',
                    'Recetas y tips nutricionales'
                ]
            }
        };
        
        const servicio = serviciosInfo[servicioId];
        if (servicio) {
            FitLife.showNotification(`Información de ${servicio.titulo} cargada`, 'info');
        }
    }
};

// Exportar para uso global
window.ServiciosManager = ServiciosManager;