<div class="form-group {{ $errors->has('period') ? 'has-error' : ''}}">
    {!! Form::label('period', 'Period', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('period', null, ['class' => 'form-control']) !!}
        {!! $errors->first('period', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('anno') ? 'has-error' : ''}}">
    {!! Form::label('anno', 'Anno', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('anno', null, ['class' => 'form-control']) !!}
        {!! $errors->first('anno', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('InitialDate') ? 'has-error' : ''}}">
    {!! Form::label('InitialDate', 'Initialdate', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::date('InitialDate', null, ['class' => 'form-control']) !!}
        {!! $errors->first('InitialDate', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('FinalDate') ? 'has-error' : ''}}">
    {!! Form::label('FinalDate', 'Finaldate', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::date('FinalDate', null, ['class' => 'form-control']) !!}
        {!! $errors->first('FinalDate', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
