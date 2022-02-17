@extends('layouts.main')

@section('title', 'Editando...')

@section('content')
        
<h1>Editar cadastro do usuário {{ $usuario -> nome}}</h1><br>
    <div class="container">
      <form method="POST" action="/usuario/update/{{$usuario -> id}}">
            @csrf
            @method('PUT')
            <table class="table table-bordered">
              <thead>
              <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Telefone</th>
              </tr>
            </thead>
                  <tbody>
                      <tr>
                      <th scope="row">{{ $usuario ->id}}</th>
                      <td>{{ $usuario ->nome}}</td>
                      <td>{{ $usuario ->telefone }}</td>
                  </tr>
                  </tbody>
          </table>
            <div class="form-group " style="text-align: center" >
              <label for="nome" >Novo nome</label>
              <input type="text" class="form-control " id="nome" name="nome" style="width:300px;margin:auto" required ><br>
            </div>
            <div class="form-group" style="text-align: center">
              <label for="telefone">Novo Telefone</label>
              <input type="text" class="form-control" id="telefone" name="telefone" style="width:300px;margin:auto" placeholder="(xx)-xxxxx-xxxx" required><br>
              <button type="submit" class="btn btn-primary" style="margin:auto">Enviar</button>
            </div>
            <script> 
              $("#telefone").mask("(99)99999-9999");
            </script>
          </form>
        @endsection    
    </div>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="js/jquery.mask.js"></script>