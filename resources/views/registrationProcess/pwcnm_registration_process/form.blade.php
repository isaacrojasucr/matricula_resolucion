<div class="form-group {{ $errors->has('anno') ? 'has-error' : ''}}">
    <div class="col-md-offset-2 col-md-8">
        {!! Form::number('anno', null, ['class' => 'form-control center','placeholder' => ''.trans('form.year'), 'required' => 'required' ]) !!}
        {!! $errors->first('anno', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group  center {{ $errors->has('period') ? 'has-error' : ''}}">
    <div class="col-md-offset-2 col-md-8">
        {!! Form::number('period', null, ['class' => 'form-control center','placeholder' => ''.trans('form.period'), 'required' => 'required']) !!}
        {!! $errors->first('period', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('InitialDate') ? 'has-error' : ''}}">
    <div class="col-md-offset-2 col-md-8 center">
        {!! Form::label('', ''.trans('form.iniDate')) !!}
        {!! Form::date('InitialDate', null, ['class' => 'form-control center','placeholder' => ''.trans('form.iniDate'), 'required' => 'required']) !!}
        {!! $errors->first('InitialDate', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('FinalDate') ? 'has-error' : ''}}">

    <div class="col-md-offset-2 col-md-8 center">
        {!! Form::label('', ''.trans('form.finalDate')) !!}
        {!! Form::date('FinalDate', null, ['class' => 'form-control center','placeholder' => ''.trans('form.finalDate'), 'required' => 'required']) !!}
        {!! $errors->first('FinalDate', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-2 col-md-8">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : ''.trans('form.save'), ['class' => 'btn btn-primary col-md-12']) !!}
    </div>
</div>
