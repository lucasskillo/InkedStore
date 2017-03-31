@extends('layout.default')

@section('active_category')
    active
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Editar Usuário</h4>
                </div>
                <hr>
                <div class="content">
                    {!! Form::model($user,[
                                    'route' => ['users.update', 'user' => $user->id]
                                    , 'class' => 'form', 'method' => 'PUT'])!!}

                    @include('users._form')

                    {!! Html::openFormGroup() !!}
                    {!! Button::success('Salvar')->submit() !!}
                    {!! Button::danger('Cancelar')->asLinkTo(route('users.index')) !!}
                    {!! Html::closeFormGroup() !!}

                    {!! Form::close() !!}
                </div><!-- end content-->
            </div><!--  end card  -->
        </div> <!-- end col-md-12 -->
    </div> <!-- end row -->

@endsection