<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('productEntry') }}
            {{ Form::text('productEntry', $entry->productEntry, ['class' => 'form-control' . ($errors->has('productEntry') ? ' is-invalid' : ''), 'placeholder' => 'Productentry']) }}
            {!! $errors->first('productEntry', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('quantityEntry') }}
            {{ Form::text('quantityEntry', $entry->quantityEntry, ['class' => 'form-control' . ($errors->has('quantityEntry') ? ' is-invalid' : ''), 'placeholder' => 'Quantityentry']) }}
            {!! $errors->first('quantityEntry', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('priceProductEntry') }}
            {{ Form::text('priceProductEntry', $entry->priceProductEntry, ['class' => 'form-control' . ($errors->has('priceProductEntry') ? ' is-invalid' : ''), 'placeholder' => 'Priceproductentry']) }}
            {!! $errors->first('priceProductEntry', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('brandEntry') }}
            {{ Form::text('brandEntry', $entry->brandEntry, ['class' => 'form-control' . ($errors->has('brandEntry') ? ' is-invalid' : ''), 'placeholder' => 'Brandentry']) }}
            {!! $errors->first('brandEntry', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dateEntry') }}
            {{ Form::text('dateEntry', $entry->dateEntry, ['class' => 'form-control' . ($errors->has('dateEntry') ? ' is-invalid' : ''), 'placeholder' => 'Dateentry']) }}
            {!! $errors->first('dateEntry', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_product') }}
            {{ Form::select('id_product',$products , $entry->id_product, ['class' => 'form-control' . ($errors->has('id_product') ? ' is-invalid' : ''), 'placeholder' => 'Id Product']) }}
            {!! $errors->first('id_product', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>