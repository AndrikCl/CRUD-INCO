<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nameSupplier') }}
            {{ Form::text('nameSupplier', $supplier->nameSupplier, ['class' => 'form-control' . ($errors->has('nameSupplier') ? ' is-invalid' : ''), 'placeholder' => 'Namesupplier']) }}
            {!! $errors->first('nameSupplier', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nitSupplier') }}
            {{ Form::text('nitSupplier', $supplier->nitSupplier, ['class' => 'form-control' . ($errors->has('nitSupplier') ? ' is-invalid' : ''), 'placeholder' => 'Nitsupplier']) }}
            {!! $errors->first('nitSupplier', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('phoneNumberSupplier') }}
            {{ Form::text('phoneNumberSupplier', $supplier->phoneNumberSupplier, ['class' => 'form-control' . ($errors->has('phoneNumberSupplier') ? ' is-invalid' : ''), 'placeholder' => 'Phonenumbersupplier']) }}
            {!! $errors->first('phoneNumberSupplier', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>