<div class="form-group {{ $errors->has('initial') ? 'has-error' : ''}}">
    {!! Form::label('initial', 'Initial', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('initial', null, ['class' => 'form-control']) !!}
        {!! $errors->first('initial', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('period') ? 'has-error' : ''}}">
    {!! Form::label('period', 'Period', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('period', null, ['class' => 'form-control']) !!}
        {!! $errors->first('period', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('cycle') ? 'has-error' : ''}}">
    {!! Form::label('cycle', 'Cycle', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('cycle', null, ['class' => 'form-control']) !!}
        {!! $errors->first('cycle', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('plan') ? 'has-error' : ''}}">
    {!! Form::label('plan', 'Plan', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('plan', null, ['class' => 'form-control']) !!}
        {!! $errors->first('plan', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('carrer') ? 'has-error' : ''}}">
    {!! Form::label('carrer', 'Carrer', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('carrer', null, ['class' => 'form-control']) !!}
        {!! $errors->first('carrer', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
