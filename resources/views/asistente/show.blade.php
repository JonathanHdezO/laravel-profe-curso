@extends('layouts.app')

@section('template_title')
    {{ $asistente->name ?? 'Show Asistente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Asistente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('asistentes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Profesor Id:</strong>
                            {{ $asistente->profesor_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $asistente->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $asistente->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Cubiculo:</strong>
                            {{ $asistente->cubiculo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
