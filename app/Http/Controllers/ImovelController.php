<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Imovel;

class ImovelController extends Controller
{
    public function create(){
        return view('imovels.create');
    }

    public function store(Request $request){
        Imovel::create([
            'endereco' => $request->endereco,
            'descricao' => $request->descricao,
            'proprietario' => $request->proprietario,
            'foto' => $request->foto
        ]);
        //Falta processar a imagem para uma outra pasta.

        return "Imóvel criado com sucesso!";
    }

    public function showAll(){
        $imovels = Imovel::all();
        return view('imovels.showAll', ['imovels' => $imovels]);
    }

    public function show($id){
        $imovel = Imovel::findOrFail($id);
        return view('imovels.show', ['imovel' => $imovel]);
    }

    public function edit($id){
        $imovel = Imovel::findOrFail($id);
        return view('imovels.edit', ['imovel' => $imovel]);
    }

    public function update(Request $request, $id){
        $imovel = Imovel::findOrFail($id);

        $imovel->update([
            'endereco' => $request->endereco,
            'descricao' => $request->descricao,
            'proprietario' => $request->proprietario,
            'foto' => $request->foto
        ]);

        return "Imóvel alterado com sucesso!";
    }

    //usar isso no modal de excluir o registro
    public function destroy($id){
        $imovel = Imovel::findOrFail($id);

        $imovel->delete();

        return "Produto excluído com sucesso";
    }
}
