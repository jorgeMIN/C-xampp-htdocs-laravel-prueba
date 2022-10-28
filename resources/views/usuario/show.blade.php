@extends('layouts.app')

@section('template_title')
    {{ $usuario->name ?? 'Show Usuario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('usuarios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Usuario:</strong>
                            {{ $usuario->id_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>User Name:</strong>
                            {{ $usuario->user_name }}
                        </div>
                        <div class="form-group">
                            <strong>Contraseña:</strong>
                            {{ $usuario->contraseña }}
                        </div>
                        <div class="form-group">
                            <strong>Reservas:</strong>
                            {{ $usuario->reservas }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
