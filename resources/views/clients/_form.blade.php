<script>
    function formatar(mascara, documento){
        var i = documento.value.length;
        var saida = mascara.substring(0,1);
        var texto = mascara.substring(i)

        if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
        }

    }
</script>

{!! Html::openFormGroup('name', $errors) !!}
{!! Form::label('name', 'Nome', ['class' => 'control-label']) !!}
{!! Form::text('name', null, ['class' => 'form-control']) !!}
{!! Form::error('name', $errors) !!}
{!! Html::closeFormGroup() !!}

{!! Html::openFormGroup('address', $errors) !!}
{!! Form::label('address', 'Endereço', ['class' => 'control-label']) !!}
{!! Form::text('address', null, ['class' => 'form-control']) !!}
{!! Form::error('address', $errors) !!}
{!! Html::closeFormGroup() !!}

{!! Html::openFormGroup('taxid', $errors) !!}
{!! Form::label('taxid', 'CPF', ['class' => 'control-label']) !!}
{!! Form::text('taxid',null,['class' => 'form-control', 'maxlength'=> '14',
                'OnKeyPress'=> "formatar('###.###.###-##', this)"]) !!}
{!! Form::error('taxid', $errors) !!}
{!! Html::closeFormGroup() !!}

{!! Html::openFormGroup('phone', $errors) !!}
{!! Form::label('phone', 'Telefone', ['class' => 'control-label']) !!}
{!! Form::text('phone',null,['class' => 'form-control', 'maxlength'=> '12',
                'OnKeyPress'=> "formatar('##-####-####', this)"]) !!}
{!! Form::error('phone', $errors) !!}
{!! Html::closeFormGroup() !!}



