<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nameClient') }}
            {{ Form::text('nameClient', $client->nameClient, ['class' => 'form-control' . ($errors->has('nameClient') ? ' is-invalid' : ''), 'placeholder' => 'nombre cliente']) }}
            {!! $errors->first('nameClient', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('lastnameClient') }}
            {{ Form::text('lastnameClient', $client->lastnameClient, ['class' => 'form-control' . ($errors->has('lastnameClient') ? ' is-invalid' : ''), 'placeholder' => 'apellido cliente']) }}
            {!! $errors->first('lastnameClient', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('phoneNumberClient') }}
            {{ Form::text('phoneNumberClient', $client->phoneNumberClient, ['class' => 'form-control' . ($errors->has('phoneNumberClient') ? ' is-invalid' : ''), 'placeholder' => 'numero client']) }}
            {!! $errors->first('phoneNumberClient', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>