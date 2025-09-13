@include('layouts.header')
@include('layouts.nav-bar')

<main>
    <!-- HERO / FLYER -->
    <section class="hero d-flex align-items-center justify-content-center text-center text-light"
        style="background-image: url('/imgs/services/service1.jpg'); background-size: cover; background-position: center; height: 40vh; border-radius: 8px;">
        <div class="container">
            <h1 class="display-4 fw-bold">Coding MC</h1>
            <h5 class="fw-semibold">Web 100% a medida</h5>
        </div>
    </section>

    <!-- DETALLE DEL SERVICIO -->
    <section class="service-details py-5">
        <div class="container">
            <div class="row g-4">

                <div class="col-12">
                    <h3>A medida</h3>
                    <p>No hay límites para tus ideas. Realizamos desarrollos desde cero o con tecnologías que permiten la mejor navegabilidad y funcionalidad según tus objetivos.</p>

                    <h3>Diseño UX/UI</h3>
                    <p>Aplicamos un diseño atractivo que favorezca la experiencia del usuario y el posicionamiento SEO con Bootstrap 5 y librerías de JS personalizadas para una mejor experiencia visual.</p>

                    <h3>Full Responsive</h3>
                    <p>Para asegurar visualización correcta, navegación rápida y fácil desde todos los dispositivos.</p>

                    <h3>Potenciando tu SEO</h3>
                    <p>Contenidos fáciles de indexar para mejorar el posicionamiento de tu marca.</p>

                    <h3>Escalable a tus necesidades</h3>
                    <p>Integración de funcionalidades a medida que sean requeridas por la empresa.</p>

                    <h3>Autoadministrable</h3>
                    <p>Entrega de manual de usuario y capacitación para administrar tu proyecto.</p>

                    <h3>Seguro</h3>
                    <p>Mantenimientos y procesos seguros para prevenir ataques externos.</p>

                    <div class="text-center mt-4">
                        <a href="#" class="btn btn-lg btn-primary">Cotizar Servicio</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

@include('layouts.footer')
