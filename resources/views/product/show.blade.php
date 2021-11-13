@extends('layouts.template')

@section('template_title')
    {{ $product->name ?? 'Show Product' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Product</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Supplier Id:</strong>
                            {{ $product->supplier_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nameproduct:</strong>
                            {{ $product->nameProduct }}
                        </div>
                        <div class="form-group">
                            <strong>Quantityproduct:</strong>
                            {{ $product->quantityProduct }}
                        </div>
                        <div class="form-group">
                            <strong>Priceproduct:</strong>
                            {{ $product->priceProduct }}
                        </div>
                        <div class="form-group">
                            <strong>Brandproduct:</strong>
                            {{ $product->brandProduct }}
                        </div>
                        <div class="form-group">
                            <strong>Ivaproduct:</strong>
                            {{ $product->ivaProduct }}
                        </div>
                        <div class="form-group">
                            <strong>Descriptionproduct:</strong>
                            {{ $product->descriptionProduct }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
