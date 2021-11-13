@extends('layouts.template')

@section('template_title')
    {{ $invoice->name ?? 'Show Invoice' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Invoice</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('invoices.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Client:</strong>
                            {{ $invoice->id_client }}
                        </div>
                        <div class="form-group">
                            <strong>Id Product:</strong>
                            {{ $invoice->id_product }}
                        </div>
                        <div class="form-group">
                            <strong>Paymentpointinvoice:</strong>
                            {{ $invoice->paymentPointInvoice }}
                        </div>
                        <div class="form-group">
                            <strong>Dateinvoice:</strong>
                            {{ $invoice->dateInvoice }}
                        </div>
                        <div class="form-group">
                            <strong>Ivainvoice:</strong>
                            {{ $invoice->ivaInvoice }}
                        </div>
                        <div class="form-group">
                            <strong>Totalproductsinvoice:</strong>
                            {{ $invoice->totalProductsInvoice }}
                        </div>
                        <div class="form-group">
                            <strong>Totalpriceinvoice:</strong>
                            {{ $invoice->totalPriceInvoice }}
                        </div>
                        <div class="form-group">
                            <strong>Cashreceivedinvoice:</strong>
                            {{ $invoice->cashReceivedInvoice }}
                        </div>
                        <div class="form-group">
                            <strong>Cashbackinvoice:</strong>
                            {{ $invoice->cashBackInvoice }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
