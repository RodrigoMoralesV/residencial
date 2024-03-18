@extends('layout')

@section('nombre')
  Home
@endsection

@section('cuerpo')
<div class="container mt-5">
    <h3 class="text-center">¡Bienvenido a Aigis Co.!</h3>
    <hr>

    <p class="text-center">Tu gestión de unidad residencial simplificada.</p>
    
    <div class="row my-4">
        <div class="col-md-4">
            <h4>¿Quiénes somos?</h4>
            <p>Somos Aigis Co., una empresa dedicada a la administración de unidades residenciales, enfocados en brindar la mejor experiencia a nuestros usuarios a través de tecnología de punta y un equipo comprometido con la excelencia.</p>
        </div>
        <div class="col-md-4">
            <h4>¿Qué hacemos?</h4>
            <p>Ofrecemos soluciones integrales para la gestión de tu comunidad, desde el manejo de pagos y cuotas de mantenimiento hasta la organización de eventos comunitarios y la gestión de incidencias y sugerencias de los residentes.</p>
        </div>
        <div class="col-md-4">
            <h4>Servicios destacados</h4>
            <ul>
                <li>Gestión financiera</li>
                <li>Reservas de áreas comunes</li>
                <li>Comunicados y avisos</li>
                <li>Seguridad y vigilancia</li>
            </ul>
        </div>
    </div>

    <div class="text-center my-5">
        <h4>Comienza a gestionar tu unidad residencial hoy</h4>
        <p>Únete a la comunidad de Aigis Co. y transforma la gestión de tu comunidad.</p>
        <a href="https://www.youtube.com/watch?v=QSwk6k1Hejg" class="btn btn-primary">Explorar servicios</a>
    </div>

    <div class="row">
        <div class="col-md-6">
            <h5>Testimonios</h5>
            <p>Descubre lo que nuestros clientes dicen sobre nosotros y cómo hemos transformado la gestión de sus comunidades.</p>
        </div>
        <div class="col-md-6">
            <h5>Contáctanos</h5>
            <p>¿Tienes preguntas? Nuestro equipo está listo para ayudarte. Contáctanos a través de nuestras redes sociales o email.</p>
        </div>
    </div>
</div>
@endsection
