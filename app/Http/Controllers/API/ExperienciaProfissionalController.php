<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ExperienciaProfissional;
use Illuminate\Http\Request;

class ExperienciaProfissionalController extends Controller
{
    public function index()
    {
        $experienciasProfissionais = ExperienciaProfissional::all()->toArray();

        // foreach ($autors as $key => $value) {
        //     $autors[$key]['postsTotal'] = Post::where('autor_id', $value['id'])->count();
        // }
        return $experienciasProfissionais;
    }

    // add autor
    public function add(Request $request)
    {
        $experienciasProfissional = new ExperienciaProfissional([
            'instituicao'        => $request->input('instituicao'),
            'cargo'              => $request->input('cargo'),
            'inicio'             => $request->input('inicio'),
            'fim'                => $request->input('fim'),
            'descricao_richtext' => $request->input('descricao_richtext'),
            'usuario_id'         => $request->input('usuario_id')

        ]);
        $experienciasProfissional->save();

        return response()->json('A Experiência Profissional foi adicionada com Sucesso');
    }

    public function edit($id)
    {
        $experienciaProfissional = ExperienciaProfissional::find($id);
        return response()->json($experienciaProfissional);
    }
    
    public function update($id, Request $request)
    {
        $experienciaProfissional = ExperienciaProfissional::find($id);
        $experienciaProfissional->update($request->all());

        return response()->json('A Experiência Profissional foi alterada com sucesso');
    }

    public function delete($id)
    {
        $experienciaProfissional = ExperienciaProfissional::find($id);
        $experienciaProfissional->delete();

        return response()->json('A Experiência profissional foi deletada com sucesso!');
    }
}
