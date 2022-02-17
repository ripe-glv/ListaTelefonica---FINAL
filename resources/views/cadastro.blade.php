@extends('layouts.main')

@section('title', 'Cadastro')

@section('content')
<h1>Cadastro</h1><br>
    <div class="container">
        <form action="/" method="POST">
            @csrf
            <div class="form-group " style="text-align: center" >
              <label for="nome" >Nome</label>
              <input type="text" class="form-control " id="nome" name="nome" style="width:300px;margin:auto" required><br>
            </div>
            <div class="form-group" style="text-align: center">
              <label for="telefone">Telefone</label>
              <input type="text" class="form-control" id="telefone" name="telefone" style="width:300px;margin:auto" placeholder="(xx)xxxxx-xxxx" required minlength="14" maxlength="16"><br>              
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
