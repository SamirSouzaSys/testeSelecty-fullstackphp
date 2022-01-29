<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ExperienciaProfissional;
use App\Models\FormacaoAcademica;
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all()->toArray();

        //TODO Aqui deve ser melhorado com algo semelhante ao WithCount
        foreach ($usuarios as $key => $value) {
            $usuarios[$key]['formacoesTotal'] = FormacaoAcademica::where('usuario_id',$value['id'])->count();
        }

        //TODO Aqui deve ser melhorado com algo semelhante ao WithCount
        foreach ($usuarios as $key => $value) {
            $usuarios[$key]['ExperienciasTotal'] = ExperienciaProfissional::where('usuario_id',$value['id'])->count();
        }
        return $usuarios;


        // SELECT *,
        // ( select count(*) FROM `formacao_academicas`
        //     where usuario_id = usuarios.id
        // ) as formacoesTotal,
        // ( select count(*) FROM `experiencia_profissionals`
        //     where usuario_id = usuarios.id
        // ) as ExperienciasTotal
        // FROM `testeSelecty-fullstackphp-DB`.usuarios;

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

    public function edit($id)
    {
        $usuario = Usuario::find($id);
        return response()->json($usuario);
    }

    public function update($id, Request $request)
    {
        $usuario = Usuario::find($id);
        $usuario->update($request->all());

        return response()->json('O Usuário foi alterado com sucesso');
    }

    public function delete($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();

        return response()->json('O Usuário foi deletado com sucesso!');
    }
}
