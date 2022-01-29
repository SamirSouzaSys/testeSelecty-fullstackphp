<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    // all Autor
    public function index()
    {
        $usuarios = Usuario::all()->toArray();

        // foreach ($autors as $key => $value) {
        //     $autors[$key]['postsTotal'] = Post::where('autor_id', $value['id'])->count();
        // }
        return $usuarios;
    }

    // add autor
    public function add(Request $request)
    {
        $usuario = new Usuario([
            'nome'     => $request->input('nome'),
            'email'    => $request->input('email'),
            'telefone' => $request->input('telefone'),
            'usuario'  => $request->input('usuario'),
            'senha'    => $request->input('senha')

        ]);
        $usuario->save();

        return response()->json('O Usuário foi adicionado com Sucesso');
    }

    // edit autor
    public function edit($id)
    {
        $usuario = Usuario::find($id);
        return response()->json($usuario);
    }

    // update autor
    public function update($id, Request $request)
    {
        $usuario = Usuario::find($id);
        $usuario->update($request->all());

        return response()->json('O Usuário foi alterado com sucesso');
    }

    // delete autor
    public function delete($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();

        return response()->json('O Usuário foi deletado com sucesso!');
    }
}
