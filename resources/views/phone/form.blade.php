<div class="form-row">
    <div class="form-group col-md-12">
        {!! Form::label('countryCode', 'Country Code :') !!} <span class="text-danger">*</span>
        {!! Form::select('countryCode', $countries, old('countryCode'), ['class' => 'form-control', 'placeholder' => 'Select Country Code', 'required']) !!}
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-12">
        {!! Form::label('number', 'Phone Number :') !!} <span class="text-danger">*</span>
        {!! Form::text('number', old('number'), ['id' => 'number', 'class' =>
        'form-control','placeholder' => 'Phone Number', 'required']) !!}
    </div>
</div>

{!! Form::submit('Check', ['class' => 'btn btn-primary']) !!}

