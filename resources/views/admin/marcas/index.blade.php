@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Administração de Marcas</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{route('admin.cidades.create')}}" class="btn btn-default">
                                <span class="glyphicon glyphicon-plus"></span>
                            </a>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Marca</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($brands as $brand)
                                        <tr>
                                            <td>{{$brand->id}}</td>
                                            <td>{{$brand->brand}}</td>
                                            <td><a href="{{ route('admin.marcas.edit', ['id' => $brand->id]) }}">
                                                <span class="glyphicon glyphicon-pencil"></span>
                                            </a> |
                                            <a href="{{ route('admin.marcas.destroy', ['id' => $brand->id]) }}"
                                                onclick="{{"event.preventDefault();document.getElementById('city-delete-form-{$brand->id}').submit();"}}">
                                                <span class="glyphicon glyphicon-remove"></span>
                                            </a>
                                        </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{$brands->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
