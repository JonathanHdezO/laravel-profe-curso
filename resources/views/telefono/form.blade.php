<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('profesor_id') }}
            {{ Form::select('profesor_id', $profesors, $telefono->profesor_id, ['class' => 'form-control' . ($errors->has('profesor_id') ? ' is-invalid' : ''), 'placeholder' => 'Profesor Id']) }}
            {!! $errors->first('profesor_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero') }}
            {{ Form::text('numero', $telefono->numero, ['class' => 'form-control' . ($errors->has('numero') ? ' is-invalid' : ''), 'placeholder' => 'Numero']) }}
            {!! $errors->first('numero', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>