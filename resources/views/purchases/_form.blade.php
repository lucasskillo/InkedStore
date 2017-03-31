<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function(){
        $('#mais').click(function(){
            var next = $('#lista tbody').children('tr').length + 1;
            $('#lista tbody').append('<tr>' +
                '<td class="linha-left"><input class = "form-control" type="text" name="item' + next + '" /></td>' +
                '<td class="linha-right"><input class = "form-control" type="number" name="quantity' + next + '"/></td>' +
                '<td class="linha-right"><input class = "form-control" type="number" name="price' + next + '"/></td>' +
                '</tr>');
            $(':hidden').val(next);
            return false;
        });
    });
</script>
{!! Html::openFormGroup('provider_id', $errors) !!}
{!! Form::label('provider_id', 'Fornecedor', ['class' => 'control-label']) !!}
{!! Form::text('provider_id', null, ['class' => 'form-control']) !!}
{!! Form::error('provider_id', $errors) !!}
{!! Html::closeFormGroup() !!}

{!! Html::openFormGroup('date', $errors) !!}
{!! Form::label('date', 'Data', ['class' => 'control-label']) !!}
{!! Form::date('date',null,['class' => 'form-control ']) !!}
{!! Form::error('date', $errors) !!}
{!! Html::closeFormGroup() !!}

{!! Html::openFormGroup('account_id', $errors) !!}
{!! Form::label('account_id', 'Conta de Pagamento', ['class' => 'control-label']) !!}
{!! Form::text('account_id', null, ['class' => 'form-control']) !!}
{!! Form::error('account_id', $errors) !!}
{!! Html::closeFormGroup() !!}

<div class="container-fluid">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Lista dos Itens</h3>
                <div style="margin-top: -2%;" class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter" id="mais">
                        <span class="fa fa-plus-square"></span> Novo Item</button>
                </div>
            </div>
        <table id="lista" class="table table-striped">
                <thead>
                <tr>
                    <th>Item</th>
                    <th>Quantidade</th>
                    <th>Preço</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><input type="text"   class = "form-control" name="item1" /></td>
                    <td><input type="number" class = "form-control" name="quantity1" /></td>
                    <td><input type="number" class = "form-control" name="price1" /></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>