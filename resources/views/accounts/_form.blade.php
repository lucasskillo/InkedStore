{!! Html::openFormGroup('name', $errors) !!}
    {!! Form::label('name', 'Nome', ['class' => 'control-label']) !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
    {!! Form::error('name', $errors) !!}
{!! Html::closeFormGroup() !!}

{!! Html::openFormGroup('balance', $errors) !!}
{!! Form::label('balance', 'Saldo', ['class' => 'control-label']) !!}
{!! Form::number('balance',null,['class' => 'form-control','step'=>'any']) !!}
{!! Form::error('balance', $errors) !!}
{!! Html::closeFormGroup() !!}

