@include('layouts.header')
@include('layouts.nav-bar')

<main>
    <!-- HERO -->
    <section class="hero d-flex align-items-center justify-content-center text-center text-light"
        style="background-image: url('/imgs/services/servicios1.png') !important; background-size: cover; background-position: center; height: 30vh; border-radius: 8px;">
        <div class="container">
            <h1 class="display-4 fw-bold">Nuestros Servicios MC</h1>
            <p class="lead fw-semibold">Soluciones digitales para hacer crecer tu negocio</p>
        </div>
    </section>

    <!-- LISTA DE SERVICIOS -->
    <!-- SERVICIOS -->
    <section class="services py-5">
        <div class="container">
            <div class="row g-5">

                <!-- Servicio Coding MC -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm text-center border-0">
                        <img src="/imgs/services/service1.jpg" class="card-img-top" alt="Coding MC">
                        <div class="card-body">
                            <h5 class="card-title">Coding MC</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Webs 100% a medida</h6>
                            <p class="card-text">Trabajamos como programadores diseñando en conjunto para ofrecer una web única y 100% personalizada, atractiva, moderna y responsive en todos los dispositivos.</p>
                            <a href="#" class="btn btn-primary">Ver servicio</a>
                        </div>
                    </div>
                </div>

                <!-- Servicio Landing MC -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm text-center border-0">
                        <img src="/imgs/services/service2.jpg" class="card-img-top" alt="Landing MC">
                        <div class="card-body">
                            <h5 class="card-title">Landing MC</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Landing Page 100% a medida</h6>
                            <p class="card-text">Desarrollamos landing pages personalizadas, totalmente responsive, con módulos y secciones necesarias adaptadas a tus objetivos.</p>
                            <a href="#" class="btn btn-primary">Ver servicio</a>
                        </div>
                    </div>
                </div>

                <!-- Servicio Shopping MC -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm text-center border-0">
                        <img src="/imgs/services/service3.jpg" class="card-img-top" alt="Shopping MC">
                        <div class="card-body">
                            <h5 class="card-title">Shopping MC</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Tiendas online a medida</h6>
                            <p class="card-text">Construimos tiendas online personalizadas para tus productos, con una experiencia de usuario pensada para potenciar ventas y totalmente responsive.</p>
                            <a href="#" class="btn btn-primary">Ver servicio</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

@include('layouts.footer')
