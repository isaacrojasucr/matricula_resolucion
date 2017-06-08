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
</div><div class="form-group {{ $errors->has('page') ? 'has-error' : ''}}">
    {!! Form::label('page', 'Page', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('page', null, ['class' => 'form-control']) !!}
        {!! $errors->first('page', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('manager') ? 'has-error' : ''}}">
    {!! Form::label('manager', 'Manager', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('manager', null, ['class' => 'form-control']) !!}
        {!! $errors->first('manager', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
