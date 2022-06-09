<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('profesor_id') }}
            {{ Form::select('profesor_id', $profesors, $curso->profesor_id, ['class' => 'form-control' . ($errors->has('profesor_id') ? ' is-invalid' : ''), 'placeholder' => 'Profesor Id']) }}
            {!! $errors->first('profesor_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $curso->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('creditos') }}
            {{ Form::text('creditos', $curso->creditos, ['class' => 'form-control' . ($errors->has('creditos') ? ' is-invalid' : ''), 'placeholder' => 'Creditos']) }}
            {!! $errors->first('creditos', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>