<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Usuario;

class editController extends Controller
{
    public function index() {

        $usuarios = Usuario::all();

        return view('editar',['usuarios'=> $usuarios]);
    }
}
