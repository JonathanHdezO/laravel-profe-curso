@extends('layouts.template')
@section('content')
     <!-- Navigation-->
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand" href="#page-top">Colegio de Goku</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#profes">Profesores</a></li>
                        <li class="nav-item"><a class="nav-link" href="#cursos">Cursos</a></li>
                        <li class="nav-item"><a class="nav-link" href="#asistentes">Asistentes</a></li>
                        <li class="nav-item"><a class="nav-link" href="#phones">Teléfonos</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Servicios</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-primary bg-black text-white">
            <div class="container px-4 text-center">
                <h1 class="fw-bolder">Bienvenido al directorio del Colegio de Goku</h1>
                <p class="lead">El colegio de Goku es patrocinado por SneakerClean</p>
                <a class="btn btn-lg btn-light" href="#profes">Directorio</a>
            </div>
        </header>

                                       
                                    
        <!-- Profes section-->
        <section id="profes">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>Profesores</h2>
                        <p class="lead">Aquí encontrarás los datos básicos de todos los profesores del colegio de Goku</p>
                        <ul>
                        @foreach ($profesors as $profesor)
                            <li><td>Nombre: {{ $profesor->nombre }}<br></td>
								<td>Telefono: {{ $profesor->telefono }}<br></td>
								<td>Domicilio: {{ $profesor->domicilio }}</td></li>
                        @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Cursos section-->
        <section id="cursos">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>Los Cursos</h2>
                        <p class="lead">Aquí podrás ver los cursos impartidos por cada profe</p>
                        <ul>
                        @foreach ($cursos as $curso)
                                            <li><td>Profesor: {{ $curso->profesor->nombre }}<br></td>
											<td>Materia: {{ $curso->nombre }}<br></td>
											<td>Créditos: {{ $curso->creditos }}</td></li>
                        @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Asistentes section-->
        <section id="asistentes">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>Los Asistentes</h2>
                        <p class="lead">En este apartado de presentamos los asistentes de cada profesor</p>
                        <ul>
                        @foreach ($asistentes as $asistente)
											<li><td>Nombre: {{ $asistente->nombre }}<br></td>
                                            <td>Profesor: {{ $asistente->profesor->nombre }}<br></td>
											<td>Dirección: {{ $asistente->direccion }}<br></td>
											<td>No. Cubiculo: {{ $asistente->cubiculo }}</td></li>
                        @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Telefonos section-->
        <section id="phones">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>Teléfonos</h2>
                        <p class="lead">Si no te contesta en su telefono márcale a alguno de estos</p>
                        <ul>
                        @foreach ($telefonos as $telefono)
											<li><td>Profesor: {{ $telefono->profesor->nombre }}<br></td>
											<td>Teléfono: {{ $telefono->numero }}</td></li>
                        @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>


@endsection