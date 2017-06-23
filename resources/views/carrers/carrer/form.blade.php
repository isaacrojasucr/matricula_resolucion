<div class="form-group {{ $errors->has('initial') ? 'has-error' : ''}}">
    <div class="col-md-8 col-md-offset-2">
        {!! Form::text('initial', null, ['class' => 'form-control center', 'required' => 'required', 'placeholder'=>''.trans('form.initial')]) !!}
        {!! $errors->first('initial', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <div class="col-md-8 col-md-offset-2">
        {!! Form::text('name', null, ['class' => 'form-control center', 'required' => 'required', 'placeholder'=>''.trans('form.name')]) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('page') ? 'has-error' : ''}}">
    <div class="col-md-8 col-md-offset-2">
        {!! Form::text('page', null, ['class' => 'form-control center', 'required' => 'required', 'placeholder'=>''.trans('form.page')]) !!}
        {!! $errors->first('page', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('manager') ? 'has-error' : ''}}">
    <div class="col-md-8 col-md-offset-2 center">
        <label>@lang('form.manager')</label>
        {!! Form::select('manager',$managers , null, ['class'=>'form-control center']) !!}
        {!! $errors->first('manager', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('plan') ? 'has-error' : ''}}">

    <div class="col-md-12 center ">
        {!! Form::label('', ''.trans('form.plan')) !!}
    </div>

    <div class="col-md-8 col-md-offset-2 center">
        <div class=" col-md-12 btn btn-default fileUpload">
            <span class="glyphicon glyphicon-file" aria-hidden="true"></span> @lang('form.file')
            {!! Form::file('plan_file',['class' => 'form-control upload']) !!}
        </div>
    </div>

</div>
<div class="form-group">
    <div class="col-md-8 col-md-offset-2">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : ''.trans('form.save'), ['class' => 'btn btn-primary col-md-12']) !!}
    </div>
</div>
