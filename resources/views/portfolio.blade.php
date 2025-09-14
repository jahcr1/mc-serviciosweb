@include('layouts.header')
@include('layouts.nav-bar')

<main>
    <!-- HERO -->
    <section class="hero d-flex align-items-center justify-content-center text-center text-light"
        style="background-image: url('/imgs/portfolio/portfolio0.png') !important; background-size: cover; background-position: center; height: 30vh; border-radius: 8px;">
        <div class="container">
            <h1 class="display-4 fw-bold">Sitios Realizados</h1>
            <p class="lead">Algunos de los trabajos que hemos desarrollado para nuestros clientes</p>
        </div>
    </section>

    <!-- GRID DE PROYECTOS -->
    <section class="portfolio py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card border-0 shadow-sm">
                        <img src="/imgs/portfolio/project1.jpg" class="card-img-top" alt="Proyecto 1">
                        <div class="card-body">
                            <h5 class="card-title">Proyecto 1</h5>
                            <p class="card-text">Landing page para startup con integración de newsletter.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card border-0 shadow-sm">
                        <img src="/imgs/portfolio/project2.jpg" class="card-img-top" alt="Proyecto 2">
                        <div class="card-body">
                            <h5 class="card-title">Proyecto 2</h5>
                            <p class="card-text">E-commerce con sistema de pagos y panel de administración.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@include('layouts.footer')
