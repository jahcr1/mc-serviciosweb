@include('layouts.header')
@include('layouts.nav-bar')

<main>
    <!-- HERO -->
    <section class="hero d-flex align-items-center justify-content-center text-center text-light"
        style="background-image: url('/imgs/hero/services-hero.jpg'); background-size: cover; background-position: center; height: 50vh;">
        <div class="container">
            <h1 class="display-4 fw-bold">Nuestros Servicios</h1>
            <p class="lead">Soluciones digitales para hacer crecer tu negocio</p>
        </div>
    </section>

    <!-- LISTA DE SERVICIOS -->
    <section class="services py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm text-center">
                        <img src="/imgs/services/service1.jpg" class="card-img-top" alt="Servicio 1">
                        <div class="card-body">
                            <h5 class="card-title">Diseño Web</h5>
                            <p class="card-text">Sitios modernos, responsivos y adaptados a tu marca.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm text-center">
                        <img src="/imgs/services/service2.jpg" class="card-img-top" alt="Servicio 2">
                        <div class="card-body">
                            <h5 class="card-title">Marketing Digital</h5>
                            <p class="card-text">Campañas efectivas para aumentar tu visibilidad online.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm text-center">
                        <img src="/imgs/services/service3.jpg" class="card-img-top" alt="Servicio 3">
                        <div class="card-body">
                            <h5 class="card-title">E-commerce</h5>
                            <p class="card-text">Tiendas online seguras y fáciles de gestionar.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@include('layouts.footer')
