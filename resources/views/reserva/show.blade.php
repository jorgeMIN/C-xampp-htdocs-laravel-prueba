@extends('layouts.app')

@section('template_title')
    {{ $reserva->name ?? 'Show Reserva' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Reserva</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('reservas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Reserva:</strong>
                            {{ $reserva->id_reserva }}
                        </div>
                        <div class="form-group">
                            <strong>Id Libro:</strong>
                            {{ $reserva->id_libro }}
                        </div>
                        <div class="form-group">
                            <strong>Id Usuario:</strong>
                            {{ $reserva->id_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha De Salida:</strong>
                            {{ $reserva->fecha de salida }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
