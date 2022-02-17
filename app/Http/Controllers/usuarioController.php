<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Usuario;

class usuarioController extends Controller
{
    public function index() {

        $usuarios = Usuario::all();

        return view('tabela',['usuarios'=> $usuarios]);
    }

    public function create(){
        return view('cadastro');
    }

    public function store(Request $request) {
        
        $usuario = new Usuario;

        $usuario->nome  = $request->nome;

        $usuario->telefone  = $request->telefone;

        $usuario->save();

        return redirect('/');
    }

    public function edit($id){
        
        $usuario = Usuario::findOrFail($id);

        return view('editar_usuario', ['usuario' => $usuario]);
    }

    public function update(Request $request){

        Usuario::findOrFail($request->id)->update($request->only(['nome','telefone']));

        return redirect('/');
    }

    public function destroy($id){

        Usuario::findOrFail($id)->delete();

        return redirect('/');
    }


}


