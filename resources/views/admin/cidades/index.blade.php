@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Administração de Cidades</h3>
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
                                        <th>Cidade</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cities as $city)
                                        <tr>
                                            <td>{{$city->id}}</td>
                                            <td>{{$city->city}}</td>
                                            <td><a href="{{ route('admin.cidades.edit', ['id' => $city->id]) }}">
                                                <span class="glyphicon glyphicon-pencil"></span>
                                            </a> |
                                            <a href="{{ route('admin.cidades.destroy', ['id' => $city->id]) }}"
                                                onclick="{{"event.preventDefault();document.getElementById('city-delete-form-{$city->id}').submit();"}}">
                                                <span class="glyphicon glyphicon-remove"></span>
                                            </a>
                                            {!!
                                                form(\FormBuilder::plain([
                                                    'id' => "city-delete-form-{$city->id}",
                                                    'method' => 'DELETE',
                                                    'url' => route('admin.cidades.destroy', ['id' => $city->id]),
                                                ]))
                                            !!}
                                        </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{$cities->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
