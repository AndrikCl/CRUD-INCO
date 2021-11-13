<div class="box box-info padding-1">
    <div class="box-body">




        <div class="form-group">
            {{ Form::label('supplier_id') }}
            {{ Form::select('supplier_id', $suppliers , $product->supplier_id, ['class' => 'form-control' . ($errors->has('supplier_id') ? ' is-invalid' : ''), 'placeholder' => 'Supplier Id']) }}
            {!! $errors->first('supplier_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>



        <div class="form-group">
            {{ Form::label('nameProduct') }}
            {{ Form::text('nameProduct', $product->nameProduct, ['class' => 'form-control' . ($errors->has('nameProduct') ? ' is-invalid' : ''), 'placeholder' => 'Nameproduct']) }}
            {!! $errors->first('nameProduct', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('quantityProduct') }}
            {{ Form::text('quantityProduct', $product->quantityProduct, ['class' => 'form-control' . ($errors->has('quantityProduct') ? ' is-invalid' : ''), 'placeholder' => 'Quantityproduct']) }}
            {!! $errors->first('quantityProduct', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('priceProduct') }}
            {{ Form::text('priceProduct', $product->priceProduct, ['class' => 'form-control' . ($errors->has('priceProduct') ? ' is-invalid' : ''), 'placeholder' => 'Priceproduct']) }}
            {!! $errors->first('priceProduct', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('brandProduct') }}
            {{ Form::text('brandProduct', $product->brandProduct, ['class' => 'form-control' . ($errors->has('brandProduct') ? ' is-invalid' : ''), 'placeholder' => 'Brandproduct']) }}
            {!! $errors->first('brandProduct', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ivaProduct') }}
            {{ Form::text('ivaProduct', $product->ivaProduct, ['class' => 'form-control' . ($errors->has('ivaProduct') ? ' is-invalid' : ''), 'placeholder' => 'Ivaproduct']) }}
            {!! $errors->first('ivaProduct', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descriptionProduct') }}
            {{ Form::text('descriptionProduct', $product->descriptionProduct, ['class' => 'form-control' . ($errors->has('descriptionProduct') ? ' is-invalid' : ''), 'placeholder' => 'Descriptionproduct']) }}
            {!! $errors->first('descriptionProduct', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
