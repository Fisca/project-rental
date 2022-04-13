<!-- Custname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CUSTNAME', 'Custname:') !!}
    {!! Form::text('CUSTNAME', null, ['class' => 'form-control','maxlength' => 35,'maxlength' => 35]) !!}
</div>

<!-- Custaddr Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CUSTADDR', 'Custaddr:') !!}
    {!! Form::text('CUSTADDR', null, ['class' => 'form-control','maxlength' => 60,'maxlength' => 60]) !!}
</div>

<!-- Custphone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CUSTPHONE', 'Custphone:') !!}
    {!! Form::text('CUSTPHONE', null, ['class' => 'form-control','maxlength' => 15,'maxlength' => 15]) !!}
</div>

<!-- Custemail Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CUSTEMAIL', 'Custemail:') !!}
    {!! Form::email('CUSTEMAIL', null, ['class' => 'form-control','maxlength' => 35,'maxlength' => 35]) !!}
</div>

<!-- Custidentity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CUSTIDENTITY', 'Custidentity:') !!}
    {!! Form::text('CUSTIDENTITY', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Custbirth Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CUSTBIRTH', 'Custbirth:') !!}
    {!! Form::date('CUSTBIRTH', null, ['class' => 'form-control','id'=>'CUSTBIRTH']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#CUSTBIRTH').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Custpict Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CUSTPICT', 'Custpict:') !!}<br>
    {!! Form::file('CUSTPICT', null, ['class' => 'form-control']) !!}
</div>

<!-- Custgender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CUSTGENDER', 'Custgender:') !!}<br>
    {!! Form::radio('CUSTGENDER', 'laki-laki', ['class' => 'form-control']) !!}
    {!! Form::label('CUSTGENDER', 'Laki-laki') !!}
    {!! Form::radio('CUSTGENDER', 'perempuan', ['class' => 'form-control']) !!}
    {!! Form::label('CUSTGENDER', 'Perempuan') !!}
</div>

<!-- Custcompany Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CUSTCOMPANY', 'Custcompany:') !!}
    {!! Form::text('CUSTCOMPANY', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('customers.index') }}" class="btn btn-light">Cancel</a>
</div>
