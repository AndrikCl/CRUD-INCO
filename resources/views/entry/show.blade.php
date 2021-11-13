@extends('layouts.template')

@section('template_title')
    {{ $entry->name ?? 'Show Entry' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Entry</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('entries.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Productentry:</strong>
                            {{ $entry->productEntry }}
                        </div>
                        <div class="form-group">
                            <strong>Quantityentry:</strong>
                            {{ $entry->quantityEntry }}
                        </div>
                        <div class="form-group">
                            <strong>Priceproductentry:</strong>
                            {{ $entry->priceProductEntry }}
                        </div>
                        <div class="form-group">
                            <strong>Brandentry:</strong>
                            {{ $entry->brandEntry }}
                        </div>
                        <div class="form-group">
                            <strong>Dateentry:</strong>
                            {{ $entry->dateEntry }}
                        </div>
                        <div class="form-group">
                            <strong>Id Product:</strong>
                            {{ $entry->id_product }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
