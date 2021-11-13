@extends('layouts.template')

@section('template_title')
    {{ $output->name ?? 'Show Output' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Output</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('outputs.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Product:</strong>
                            {{ $output->id_product }}
                        </div>
                        <div class="form-group">
                            <strong>Id Employee:</strong>
                            {{ $output->id_employee }}
                        </div>
                        <div class="form-group">
                            <strong>Productoutput:</strong>
                            {{ $output->productOutput }}
                        </div>
                        <div class="form-group">
                            <strong>Quantityoutput:</strong>
                            {{ $output->quantityOutput }}
                        </div>
                        <div class="form-group">
                            <strong>Brandproductoutput:</strong>
                            {{ $output->brandProductOutput }}
                        </div>
                        <div class="form-group">
                            <strong>Dateoutput:</strong>
                            {{ $output->dateOutput }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
