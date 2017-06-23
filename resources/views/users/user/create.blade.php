
                <div class="panel panel-default">
                    <div class="panel-heading">@lang('form.createUser')</div>
                    <div class="panel-body">
                        <br/>
                        <br/>
                        {!! Form::open(['route'=>'usuarios.store', 'method'=>'POST']) !!}
                        <div class="form-group">
                            {!! Form::label('', trans('form.name').': ') !!}
                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=>trans('form.holderName'), 'required'=>'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('',trans('form.lastname').': ') !!}
                            {!! Form::text('lastname', null, ['class' => 'form-control', 'placeholder'=>trans('form.holderLastName'), 'required'=>'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('',trans('form.email').': ') !!}
                            {!! Form::email('email', null, ['class' => 'form-control', 'placeholder'=>trans('form.holderEmail'), 'required'=>'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('', trans('form.password').': ') !!}
                            {!! Form::password('password',['class' => 'form-control', 'placeholder'=>trans('form.holderPassword'), 'required'=>'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('', trans('form.phone').': ') !!}
                            {!! Form::text('phone',null,['class' => 'form-control', 'placeholder'=>trans('form.phone'), 'required'=>'required']) !!}
                        </div>
                        {!! Form::submit(trans('form.register'), ['class'=>'btn btn-primary col-md-12']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>

