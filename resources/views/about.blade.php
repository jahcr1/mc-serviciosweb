@include('layouts.header')
@include('layouts.nav-bar')

<main>
    <!-- HERO -->
    <section class="hero d-flex align-items-center justify-content-center text-center text-light"
        style="background-image: url('/imgs/about/about2.png') !important; background-size: cover; background-position: center; height: 30vh;">
        <div class="container">
            <h1 class="display-4 fw-bold">Sobre Nosotros</h1>
            <p class="lead">Un equipo apasionado por el desarrollo web y la innovación digital</p>
        </div>
    </section>

    <!-- INFO -->
    <section class="about py-5">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-md-6">
                    <img src="/imgs/about/team.jpg" class="img-fluid rounded shadow" alt="Nuestro equipo">
                </div>
                <div class="col-md-6">
                    <h2>Quiénes Somos</h2>
                    <p>Somos un grupo de profesionales dedicados a brindar soluciones digitales de calidad. Nuestro objetivo es ayudar a empresas y emprendedores a crecer en el mundo online.</p>
                    <p>Creemos en la innovación, el diseño funcional y el trabajo en equipo como pilares fundamentales.</p>
                </div>
            </div>
        </div>
    </section>
</main>

@include('layouts.footer')
