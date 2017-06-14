<div class="form-group  {{ $errors->has('name') ? 'has-error' : ''}}">

    <div class="col-md-7 col-md-offset-3 center">
        {!! Form::label('name', ''.trans('form.name'), ['class' => '']) !!}
        {!! Form::text('name', null, ['class' => 'form-control center', 'required'=>'required', 'placeholder'=>''.trans('form.name')]) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class=" col-md-7 col-md-offset-3">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : ''.trans('form.save'), ['class' => 'btn btn-primary col-md-12']) !!}
    </div>
</div>
