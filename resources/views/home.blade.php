@include('layouts.header')

<main>
    <!-- HERO SECTION -->
    <section class="hero d-flex align-items-center justify-content-center text-center" style="background-image: url('/imgs/hero/hero1.jpg'); background-size: cover; background-position: center; height: 90vh;">
        <div class="container text-light">
            <h1 class="display-4 fw-light">Bienvenido a {{ config('app.name') }}</h1>
            <p class="lead mb-4">Desarrollo web profesional para hacer crecer tu negocio</p>
            <a href="{{ route('contact') }}" class="btn btn-lg btn-info shadow-lg">Solicita tu presupuesto</a>
        </div>
    </section>

    <!-- SERVICIOS -->
    <section class="services py-5">
        <div class="container">
            <h2 class="text-center mb-5">Nuestros Servicios</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 text-center border-0 shadow-sm">
                        <img src="/imgs/services/service1.jpg" class="card-img-top" alt="Servicio 1">
                        <div class="card-body">
                            <h5 class="card-title">Diseño Web</h5>
                            <p class="card-text">Creamos sitios modernos, responsivos y atractivos para tu negocio.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 text-center border-0 shadow-sm">
                        <img src="/imgs/services/service2.jpg" class="card-img-top" alt="Servicio 2">
                        <div class="card-body">
                            <h5 class="card-title">Marketing Digital</h5>
                            <p class="card-text">Estrategias efectivas para mejorar tu presencia online y aumentar ventas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 text-center border-0 shadow-sm">
                        <img src="/imgs/services/service3.jpg" class="card-img-top" alt="Servicio 3">
                        <div class="card-body">
                            <h5 class="card-title">E-commerce</h5>
                            <p class="card-text">Desarrollamos tiendas online seguras, rápidas y fáciles de gestionar.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- NOSOTROS -->
    <section class="about py-5 bg-dark text-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="/images/about.jpg" class="img-fluid rounded shadow" alt="Nosotros">
                </div>
                <div class="col-md-6">
                    <h2>Sobre Nosotros</h2>
                    <p>Somos un equipo de profesionales dedicados a ofrecer soluciones digitales integrales. Nuestra misión es ayudarte a crecer en el mundo online con proyectos de alta calidad.</p>
                    <a href="{{ route('about') }}" class="btn btn-outline-light mt-3">Conoce más</a>
                </div>
            </div>
        </div>
    </section>

    <!-- PORTFOLIO / PROYECTOS -->
    <section class="portfolio py-5">
        <div class="container">
            <h2 class="text-center mb-5">Proyectos Recientes</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm">
                        <img src="/images/project1.jpg" class="card-img-top" alt="Proyecto 1">
                        <div class="card-body">
                            <h5 class="card-title">Proyecto 1</h5>
                            <p class="card-text">Sitio corporativo desarrollado con Laravel y Bootstrap.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm">
                        <img src="/images/project2.jpg" class="card-img-top" alt="Proyecto 2">
                        <div class="card-body">
                            <h5 class="card-title">Proyecto 2</h5>
                            <p class="card-text">Tienda online completa con sistema de pagos integrado.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm">
                        <img src="/images/project3.jpg" class="card-img-top" alt="Proyecto 3">
                        <div class="card-body">
                            <h5 class="card-title">Proyecto 3</h5>
                            <p class="card-text">Landing page para marketing digital con animaciones modernas.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="{{ route('portfolio') }}" class="btn btn-danger">Ver todos los proyectos</a>
            </div>
        </div>
    </section>

    <!-- CONTACTO CTA -->
    <section class="contact-cta py-5 text-light text-center">
        <div class="container">
            <h2>¿Listo para tu proyecto?</h2>
            <p class="mb-4">Contáctanos hoy y transforma tu idea en realidad digital.</p>
            <a href="{{ route('contact') }}" class="btn btn-lg btn-light text-primary">Solicita tu presupuesto</a>
        </div>
    </section>
</main>

@include('layouts.footer')
