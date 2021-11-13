@extends('layouts.template')

@section('template_title')
    {{ $client->name ?? 'Show Client' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Client</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clients.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nameclient:</strong>
                            {{ $client->nameClient }}
                        </div>
                        <div class="form-group">
                            <strong>Lastnameclient:</strong>
                            {{ $client->lastnameClient }}
                        </div>
                        <div class="form-group">
                            <strong>Phonenumberclient:</strong>
                            {{ $client->phoneNumberClient }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
