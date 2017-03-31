@extends('layout.default')

@section('active_category')
    active
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Editar Cliente</h4>
                </div>
                <hr>
                <div class="content">
                    {!! Form::model($client,[
                                    'route' => ['clients.update', 'client' => $client->id]
                                    , 'class' => 'form', 'method' => 'PUT'])!!}

                    @include('clients._form')

                    {!! Html::openFormGroup() !!}
                    {!! Button::success('Atualizar')->submit() !!}
                    {!! Button::danger('Cancelar')->asLinkTo(route('clients.index')) !!}
                    {!! Html::closeFormGroup() !!}

                    {!! Form::close() !!}
                </div><!-- end content-->
            </div><!--  end card  -->
        </div> <!-- end col-md-12 -->
    </div> <!-- end row -->

@endsection