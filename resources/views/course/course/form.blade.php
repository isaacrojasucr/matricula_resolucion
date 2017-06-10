<div class="form-group {{ $errors->has('initial') ? 'has-error' : ''}}">
    <div class="col-md-offset-2 col-md-8">
        {!! Form::text('initial', null, ['class' => 'form-control center', 'placeholder'=>trans('form.initial'), 'required'=>'required']) !!}
        {!! $errors->first('initial', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <div class="col-md-offset-2 col-md-8">
        {!! Form::text('name', null, ['class' => 'form-control center', 'placeholder'=>trans('form.name'), 'required'=>'required']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('period') ? 'has-error' : ''}}">
    <div class="col-md-offset-2 col-md-8">
        {!! Form::number('period', null, ['class' => 'form-control center', 'placeholder'=>trans('form.period'), 'required'=>'required']) !!}
        {!! $errors->first('period', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('cycle') ? 'has-error' : ''}}">
    <div class="col-md-offset-2 col-md-8">
        {!! Form::number('cycle', null, ['class' => 'form-control center', 'placeholder'=>trans('form.cycle'), 'required'=>'required'] ) !!}
        {!! $errors->first('cycle', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('plan') ? 'has-error' : ''}}">

    <div class="col-md-offset-2 col-md-8 center">
        {!! Form::label('', ''.trans('form.plan')) !!}
        {!! Form::file('plan_file',['class' => 'form-control', 'required'=>'required']) !!}
        {!! $errors->first('plan', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('carrer') ? 'has-error' : ''}}">
    <div class="col-md-offset-2 col-md-8 center">
        {!! Form::label('', ''.trans('form.carrer') ) !!}
        {!! Form::select('carrer', $carrers, null,['class' => 'form-control']) !!}
        {!! $errors->first('carrer', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-2 col-md-8">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : ''.trans('form.save'), ['class' => 'btn btn-primary col-md-12']) !!}
    </div>
</div>
