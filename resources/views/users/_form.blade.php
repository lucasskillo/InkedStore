{!! Html::openFormGroup('name', $errors) !!}
{!! Form::label('name', 'Nome', ['class' => 'control-label']) !!}
{!! Form::text('name', null, ['class' => 'form-control']) !!}
{!! Form::error('name', $errors) !!}
{!! Html::closeFormGroup() !!}

{!! Html::openFormGroup('email', $errors) !!}
{!! Form::label('email', 'E-mail', ['class' => 'control-label']) !!}
{!! Form::text('email', null, ['class' => 'form-control']) !!}
{!! Form::error('email', $errors) !!}
{!! Html::closeFormGroup() !!}

<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    <label for="password" class="control-label">Password</label>
    <input id="password" type="password" class="form-control" name="password">
    @if ($errors->has('password'))
        <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
    @endif
</div>

<div class="form-group">
    <label for="password-confirm" class="control-label">Confirm Password</label>
    <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
</div>
