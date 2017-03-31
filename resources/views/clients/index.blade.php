@extends('layout.default')

@section('cadastro')
    active
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Lista de Clientes
                        <a style="position: relative;float: right;"
                           href="{{ route('clients.create') }}"><buttom class="btn btn-success">Novo</buttom></a>
                    </h4>
                    <!-- will be used to show any messages -->
                    @if (Session::has('flash_message'))
                        <div data-notify="container" class="col-xs-11 col-sm-4 alert alert-success alert-with-icon animated fadeInDown" role="alert"
                             style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out; z-index: 1031; bottom: 20px; right: 20px;">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="position: absolute; right: 10px; top: 50%; margin-top: -13px; z-index: 1033;"><span aria-hidden="true">&times;</span></button>
                            <span data-notify="icon" class="fa fa-check-square-o"></span>
                            {{ Session::get('flash_message') }}
                        </div>
                    @endif
                </div>
                <div class="content">
                    <div class="toolbar">
                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                    </div>
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Telefone</th>
                            <th class="disabled-sorting text-center">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($clients as $client)
                            <tr>
                                <th>{{ $client->id }}</th>
                                <th>{{ $client->name }}</th>
                                <th>{{ $client->phone }}</th>
                                <td class="text-center">
                                    <a href="{{route('clients.edit', ['client' => $client->id])}}"
                                       class="btn-warning btn-sm"><i class="fa fa-edit"></i></a>

                                    <?php $deleteform = "delete_form-{$loop->index}"; ?>
                                    <a href="{{route('clients.destroy', ['client' => $client->id])}}"
                                       class="btn-danger btn-sm"
                                       onclick="event.preventDefault();document.getElementById('{{$deleteform}}').submit();">
                                        <i class="fa fa-close"></i></a>
                                    {!! Form::open(['route'  => ['clients.destroy', '$client' => $client],
                                                    'method' => 'DELETE',
                                                    'id'     => $deleteform,
                                                    'style'  => 'display:none']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{$clients->links()}}
                </div><!-- end content-->
            </div><!--  end card  -->
        </div> <!-- end col-md-12 -->
    </div> <!-- end row -->

@endsection