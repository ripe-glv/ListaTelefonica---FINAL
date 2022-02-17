@extends('layouts.main')

@section('title', 'Editar')

@section('content')
        
<h1>Edite ou Exclua um usuário cadastrado</h1>

<div class='container'>
        <br>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
            </tr>
            </thead>
            @foreach($usuarios as $usuario)
                <tbody>
                    <tr>
                    <th scope="row">{{ $usuario ->id}}</th>
                    <td>{{ $usuario ->nome}}</td>
                    <td>{{ $usuario ->telefone }}</td>
                    <td style="text-align: right">
                        <div id="butoes">
                            <a href="/editar/{{$usuario->id}}" class="btn btn-info edit-btn" style="height: 30px;margin-right:5px"><ion-icon name="build-outline"> </ion-icon></a> 
                            <form action="/deletar/{{$usuario->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon></button>
                            </form>
                        </div>
                </tr>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection
</div>
