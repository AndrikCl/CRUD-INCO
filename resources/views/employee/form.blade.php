<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('userEmployee') }}
            {{ Form::text('userEmployee', $employee->userEmployee, ['class' => 'form-control' . ($errors->has('userEmployee') ? ' is-invalid' : ''), 'placeholder' => 'Useremployee']) }}
            {!! $errors->first('userEmployee', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('passwordEmployee') }}
            {{ Form::text('passwordEmployee', $employee->passwordEmployee, ['class' => 'form-control' . ($errors->has('passwordEmployee') ? ' is-invalid' : ''), 'placeholder' => 'Passwordemployee']) }}
            {!! $errors->first('passwordEmployee', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nameEmployee') }}
            {{ Form::text('nameEmployee', $employee->nameEmployee, ['class' => 'form-control' . ($errors->has('nameEmployee') ? ' is-invalid' : ''), 'placeholder' => 'Nameemployee']) }}
            {!! $errors->first('nameEmployee', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('lastnameEmployee') }}
            {{ Form::text('lastnameEmployee', $employee->lastnameEmployee, ['class' => 'form-control' . ($errors->has('lastnameEmployee') ? ' is-invalid' : ''), 'placeholder' => 'Lastnameemployee']) }}
            {!! $errors->first('lastnameEmployee', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('phoneNumberEmployee') }}
            {{ Form::text('phoneNumberEmployee', $employee->phoneNumberEmployee, ['class' => 'form-control' . ($errors->has('phoneNumberEmployee') ? ' is-invalid' : ''), 'placeholder' => 'Phonenumberemployee']) }}
            {!! $errors->first('phoneNumberEmployee', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('emailEmployee') }}
            {{ Form::text('emailEmployee', $employee->emailEmployee, ['class' => 'form-control' . ($errors->has('emailEmployee') ? ' is-invalid' : ''), 'placeholder' => 'Emailemployee']) }}
            {!! $errors->first('emailEmployee', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_employeeposition') }}
            {{ Form::select('id_employeeposition',$employeepositions, $employee->id_employeeposition, ['class' => 'form-control' . ($errors->has('id_employeeposition') ? ' is-invalid' : ''), 'placeholder' => 'Id Employeeposition']) }}
            {!! $errors->first('id_employeeposition', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
