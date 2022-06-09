@extends('layouts.app')

@section('template_title')
    {{ $profesor->name ?? 'Show Profesor' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Profesor</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('profesors.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $profesor->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $profesor->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Domicilio:</strong>
                            {{ $profesor->domicilio }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
