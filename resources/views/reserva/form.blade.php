<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_reserva') }}
            {{ Form::text('id_reserva', $reserva->id_reserva, ['class' => 'form-control' . ($errors->has('id_reserva') ? ' is-invalid' : ''), 'placeholder' => 'Id Reserva']) }}
            {!! $errors->first('id_reserva', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_libro') }}
            {{ Form::text('id_libro', $reserva->id_libro, ['class' => 'form-control' . ($errors->has('id_libro') ? ' is-invalid' : ''), 'placeholder' => 'Id Libro']) }}
            {!! $errors->first('id_libro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_usuario') }}
            {{ Form::text('id_usuario', $reserva->id_usuario, ['class' => 'form-control' . ($errors->has('id_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Id Usuario']) }}
            {!! $errors->first('id_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha de salida') }}
            {{ Form::text('fecha de salida', $reserva->fecha de salida, ['class' => 'form-control' . ($errors->has('fecha de salida') ? ' is-invalid' : ''), 'placeholder' => 'Fecha De Salida']) }}
            {!! $errors->first('fecha de salida', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>