@extends('layout.default')

@section('cadastro')
    active
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Novo Cliente</h4>
                </div>
                <hr>
                <div class="content">
                    {!! Form::open(['route' => 'clients.store', 'class' => 'form']) !!}

                    @include('clients._form')

                    {!! Html::openFormGroup() !!}
                    {!! Button::success('Salvar')->submit() !!}
                    {!! Button::danger('Cancelar')->asLinkTo(route('clients.index')) !!}
                    {!! Html::closeFormGroup() !!}

                    {!! Form::close() !!}
                </div><!-- end content-->
            </div><!--  end card  -->
        </div> <!-- end col-md-12 -->
    </div> <!-- end row -->

@endsection