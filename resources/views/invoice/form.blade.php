<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('id_client') }}
            {{ Form::select('id_client',$clients, $invoice->id_client, ['class' => 'form-control' . ($errors->has('id_client') ? ' is-invalid' : ''), 'placeholder' => 'Id Client']) }}
            {!! $errors->first('id_client', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_product') }}
            {{ Form::select('id_product',$products, $invoice->id_product, ['class' => 'form-control' . ($errors->has('id_product') ? ' is-invalid' : ''), 'placeholder' => 'Id Product']) }}
            {!! $errors->first('id_product', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('paymentPointInvoice') }}
            {{ Form::text('paymentPointInvoice', $invoice->paymentPointInvoice, ['class' => 'form-control' . ($errors->has('paymentPointInvoice') ? ' is-invalid' : ''), 'placeholder' => 'Paymentpointinvoice']) }}
            {!! $errors->first('paymentPointInvoice', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dateInvoice') }}
            {{ Form::text('dateInvoice', $invoice->dateInvoice, ['class' => 'form-control' . ($errors->has('dateInvoice') ? ' is-invalid' : ''), 'placeholder' => 'Dateinvoice']) }}
            {!! $errors->first('dateInvoice', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ivaInvoice') }}
            {{ Form::text('ivaInvoice', $invoice->ivaInvoice, ['class' => 'form-control' . ($errors->has('ivaInvoice') ? ' is-invalid' : ''), 'placeholder' => 'Ivainvoice']) }}
            {!! $errors->first('ivaInvoice', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('totalProductsInvoice') }}
            {{ Form::text('totalProductsInvoice', $invoice->totalProductsInvoice, ['class' => 'form-control' . ($errors->has('totalProductsInvoice') ? ' is-invalid' : ''), 'placeholder' => 'Totalproductsinvoice']) }}
            {!! $errors->first('totalProductsInvoice', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('totalPriceInvoice') }}
            {{ Form::text('totalPriceInvoice', $invoice->totalPriceInvoice, ['class' => 'form-control' . ($errors->has('totalPriceInvoice') ? ' is-invalid' : ''), 'placeholder' => 'Totalpriceinvoice']) }}
            {!! $errors->first('totalPriceInvoice', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cashReceivedInvoice') }}
            {{ Form::text('cashReceivedInvoice', $invoice->cashReceivedInvoice, ['class' => 'form-control' . ($errors->has('cashReceivedInvoice') ? ' is-invalid' : ''), 'placeholder' => 'Cashreceivedinvoice']) }}
            {!! $errors->first('cashReceivedInvoice', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cashBackInvoice') }}
            {{ Form::text('cashBackInvoice', $invoice->cashBackInvoice, ['class' => 'form-control' . ($errors->has('cashBackInvoice') ? ' is-invalid' : ''), 'placeholder' => 'Cashbackinvoice']) }}
            {!! $errors->first('cashBackInvoice', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
