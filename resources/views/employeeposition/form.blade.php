<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('employeePosition') }}
            {{ Form::text('employeePosition', $employeeposition->employeePosition, ['class' => 'form-control' . ($errors->has('employeePosition') ? ' is-invalid' : ''), 'placeholder' => 'Employeeposition']) }}
            {!! $errors->first('employeePosition', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>