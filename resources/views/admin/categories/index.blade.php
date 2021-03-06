@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-8-col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Lista de Categorías
                    <a href="{{route('categories.create')}}" class="btn btn-primary btn-sm pull-right">
                        Crear
                    </a>
                </div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th width="10px">ID</th>
                            <th>Nombre</th>
                            <th colspan="3">&ensp;</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $tag)
                            <tr>
                                <td>{{ $tag->id }}</td>
                                <td>{{ $tag->name }}</td>
                                <td width="10px">
                                    <a href="{{route('categories.show', $tag->id)}}" class="btn btn-sm btn-default">Ver</a>
                                </td>
                                <td width="10px">
                                    <a href="{{route('categories.edit', $tag->id)}}" class="btn btn-sm btn-default">Editar</a>
                                </td>
                                <td width="10px">
                                    {!! Form::open(['route' => ['categories.destroy', $tag->id], 'method' => 'DELETE']) !!}
                                    <button class="btn btn-sm btn-danger">
                                        Eliminar
                                    </button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $categories->render() }}
                </div>
            </div>
        </div>
    </div>
@endsection