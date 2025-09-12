@include('layouts.header')
@include('layouts.nav-bar')

<main>
    <!-- HERO -->
    <section class="hero d-flex align-items-center justify-content-center text-center text-light"
        style="background-image: url('/imgs/hero/contact-hero.jpg'); background-size: cover; background-position: center; height: 50vh;">
        <div class="container">
            <h1 class="display-4 fw-bold">Contáctanos</h1>
            <p class="lead">Estamos listos para escuchar tus ideas</p>
        </div>
    </section>

    <!-- FORMULARIO -->
    <section class="contact-form py-5">
        <div class="container">
            <h2 class="text-center mb-4">Envíanos tu consulta</h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form action="#" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Asunto</label>
                            <input type="text" class="form-control" name="subject">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mensaje</label>
                            <textarea class="form-control" name="message" rows="5" required></textarea>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary btn-lg" type="submit">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACTO DIRECTO -->
    <section class="contact-direct py-5 bg-light">
        <div class="container text-center">
            <h2 class="mb-4">También puedes hablar con nosotros</h2>
            <div class="row justify-content-center g-4">
                <div class="col-md-4">
                    <a href="#" class="text-decoration-none">
                        <div class="p-4 border rounded shadow-sm h-100">
                            <i class="bi bi-whatsapp display-4 text-success"></i>
                            <h5 class="mt-3">WhatsApp</h5>
                            <p>Atención rápida y directa</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="text-decoration-none">
                        <div class="p-4 border rounded shadow-sm h-100">
                            <i class="bi bi-envelope display-4 text-danger"></i>
                            <h5 class="mt-3">Email</h5>
                            <p>Escríbenos tu idea con detalle</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

@include('layouts.footer')
