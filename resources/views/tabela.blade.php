@extends('layouts.main')

@section('title', 'Lista Telefônica')

@section('content')
<h1>Lista Telefônica</h1>
    <div class='container'>
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
                </tr>
                </tbody>
            @endforeach
        </table>
        @endsection
    </div>



