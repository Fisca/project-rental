<!-- Idcat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('IDCAT', 'Idcat:') !!}
    {!! Form::select('IDCAT', $combocat, null, ['class' => 'form-control']) !!}
</div>

<!-- Idbrand Field -->
<div class="form-group col-sm-6">
    {!! Form::label('IDBRAND', 'Idbrand:') !!}
    {!! Form::select('IDBRAND',$combobrand, null, ['class' => 'form-control']) !!}
</div>

<!-- Carname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CARNAME', 'Carname:') !!}
    {!! Form::text('CARNAME', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Carseat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CARSEAT', 'Carseat:') !!}
    {!! Form::number('CARSEAT', null, ['class' => 'form-control']) !!}
</div>

<!-- Carcolor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CARCOLOR', 'Carcolor:') !!}
    {!! Form::text('CARCOLOR', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Carfuel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CARFUEL', 'Carfuel:') !!}
    {!! Form::text('CARFUEL', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Carnumber Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CARNUMBER', 'Carnumber:') !!}
    {!! Form::text('CARNUMBER', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Carcylinder Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CARCYLINDER', 'Carcylinder:') !!}
    {!! Form::text('CARCYLINDER', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Carfeature Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CARFEATURE', 'Carfeature:') !!}
    {!! Form::text('CARFEATURE', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Caryear Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CARYEAR', 'Caryear:') !!}
    {!! Form::text('CARYEAR', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('cars.index') }}" class="btn btn-light">Cancel</a>
</div>