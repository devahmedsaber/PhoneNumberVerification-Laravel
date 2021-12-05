<div class="form-row">
    <div class="form-group col-md-12">
        {!! Form::label('Name', 'Name :') !!} <span class="text-danger">*</span>
        {!! Form::text('name', old('name'), ['id' => 'name', 'class' =>
        'form-control','placeholder' => 'Name', 'required']) !!}
        <span><small class="text-danger">{{ $errors->first('name') }}</small></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-12">
        {!! Form::label('code', 'Code :') !!} <span class="text-danger">*</span>
        {!! Form::text('code', old('code'), ['id' => 'code', 'class' =>
        'form-control','placeholder' => 'Code', 'required']) !!}
        <span><small class="text-danger">{{ $errors->first('code') }}</small></span>
    </div>
</div>

@if(isset($country))
    {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
@else
    {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
@endif
