@extends('layouts.template')

@section('template_title')
    {{ $detail->name ?? 'Show Detail' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Detail</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('details.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Invoice:</strong>
                            {{ $detail->id_invoice }}
                        </div>
                        <div class="form-group">
                            <strong>Quantityproductdetail:</strong>
                            {{ $detail->quantityProductDetail }}
                        </div>
                        <div class="form-group">
                            <strong>Priceproductdetail:</strong>
                            {{ $detail->priceProductDetail }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
