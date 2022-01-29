<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\FormacaoAcademica;
use Illuminate\Http\Request;

class FormacaoAcademicaController extends Controller
{
    public function index()
    {
        $formacoesAcademicas = FormacaoAcademica::all()->toArray();

        // foreach ($autors as $key => $value) {
        //     $autors[$key]['postsTotal'] = Post::where('autor_id', $value['id'])->count();
        // }
        return $formacoesAcademicas;
    }

    // add autor
    public function add(Request $request)
    {
        $formacaoAcademica = new FormacaoAcademica([
            'instituicao'        => $request->input('instituicao'),
            'grau'               => $request->input('grau'),
            'inicio'             => $request->input('inicio'),
            'fim'                => $request->input('fim'),
            'descricao_richtext' => $request->input('descricao_richtext'),
            'usuario_id'         => $request->input('usuario_id')

        ]);
        $formacaoAcademica->save();

        return response()->json('A Formacao Acadêmica foi adicionada com Sucesso');
    }

    public function edit($id)
    {
        $formacaoAcademica = FormacaoAcademica::find($id);
        return response()->json($formacaoAcademica);
    }

    public function update($id, Request $request)
    {
        $formacaoAcademica = FormacaoAcademica::find($id);
        $formacaoAcademica->update($request->all());

        return response()->json('A Formação Acadêmica foi alterada com sucesso');
    }

    public function delete($id)
    {
        $formacaoAcademica = FormacaoAcademica::find($id);
        $formacaoAcademica->delete();

        return response()->json('A Formação Acadêmica foi deletada com sucesso!');
    }
}
