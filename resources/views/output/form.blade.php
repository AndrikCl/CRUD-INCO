<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('id_product') }}
            {{ Form::select('id_product', $products , $output->id_product, ['class' => 'form-control' . ($errors->has('id_product') ? ' is-invalid' : ''), 'placeholder' => 'Id Product']) }}
            {!! $errors->first('id_product', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_employee') }}
            {{ Form::select('id_employee',$employees, $output->id_employee, ['class' => 'form-control' . ($errors->has('id_employee') ? ' is-invalid' : ''), 'placeholder' => 'Id Employee']) }}
            {!! $errors->first('id_employee', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('productOutput') }}
            {{ Form::text('productOutput', $output->productOutput, ['class' => 'form-control' . ($errors->has('productOutput') ? ' is-invalid' : ''), 'placeholder' => 'Productoutput']) }}
            {!! $errors->first('productOutput', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('quantityOutput') }}
            {{ Form::text('quantityOutput', $output->quantityOutput, ['class' => 'form-control' . ($errors->has('quantityOutput') ? ' is-invalid' : ''), 'placeholder' => 'Quantityoutput']) }}
            {!! $errors->first('quantityOutput', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('brandProductOutput') }}
            {{ Form::text('brandProductOutput', $output->brandProductOutput, ['class' => 'form-control' . ($errors->has('brandProductOutput') ? ' is-invalid' : ''), 'placeholder' => 'Brandproductoutput']) }}
            {!! $errors->first('brandProductOutput', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dateOutput') }}
            {{ Form::text('dateOutput', $output->dateOutput, ['class' => 'form-control' . ($errors->has('dateOutput') ? ' is-invalid' : ''), 'placeholder' => 'Dateoutput']) }}
            {!! $errors->first('dateOutput', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
