@extends('layouts.template')

@section('template_title')
    {{ $employee->name ?? 'Show Employee' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Employee</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('employees.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Useremployee:</strong>
                            {{ $employee->userEmployee }}
                        </div>
                        <div class="form-group">
                            <strong>Passwordemployee:</strong>
                            {{ $employee->passwordEmployee }}
                        </div>
                        <div class="form-group">
                            <strong>Nameemployee:</strong>
                            {{ $employee->nameEmployee }}
                        </div>
                        <div class="form-group">
                            <strong>Lastnameemployee:</strong>
                            {{ $employee->lastnameEmployee }}
                        </div>
                        <div class="form-group">
                            <strong>Phonenumberemployee:</strong>
                            {{ $employee->phoneNumberEmployee }}
                        </div>
                        <div class="form-group">
                            <strong>Emailemployee:</strong>
                            {{ $employee->emailEmployee }}
                        </div>
                        <div class="form-group">
                            <strong>Id Employeeposition:</strong>
                            {{ $employee->id_employeeposition }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
