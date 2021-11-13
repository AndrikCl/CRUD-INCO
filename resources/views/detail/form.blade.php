<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('id_invoice') }}
            {{ Form::select('id_invoice',$invoices , $detail->id_invoice, ['class' => 'form-control' . ($errors->has('id_invoice') ? ' is-invalid' : ''), 'placeholder' => 'Id Invoice']) }}
            {!! $errors->first('id_invoice', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('quantityProductDetail') }}
            {{ Form::text('quantityProductDetail', $detail->quantityProductDetail, ['class' => 'form-control' . ($errors->has('quantityProductDetail') ? ' is-invalid' : ''), 'placeholder' => 'Quantityproductdetail']) }}
            {!! $errors->first('quantityProductDetail', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('priceProductDetail') }}
            {{ Form::text('priceProductDetail', $detail->priceProductDetail, ['class' => 'form-control' . ($errors->has('priceProductDetail') ? ' is-invalid' : ''), 'placeholder' => 'Priceproductdetail']) }}
            {!! $errors->first('priceProductDetail', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
