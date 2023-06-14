<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Categoria;
use App\Models\Contato;
use Illuminate\Http\Request;

class PapelariaController extends Controller
{
    public function index(Request $request)
    {
        $query = Produto::query();

        // Aplicar filtro de pesquisa
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('nome', 'like', "%$search%")
                ->orWhere('descricao', 'like', "%$search%");
        }

        // Ordenar por valor (do mais baixo para o mais alto ou vice-versa)
        if ($request->has('sort')) {
            $sort = $request->input('sort');
            $query->orderBy('valor', $sort);
        }

        $produtos = $query->paginate(12); // Defina o número desejado de produtos por página

        $categorias = Categoria::all();
        return view('papelaria.index', compact('produtos', 'categorias'));
    }

    public function login()
    {
        return redirect()->route('login');
    }

    public function sobre()
    {
        return view('papelaria.sobre');
    }

    public function contato()
    {
        return view('papelaria.contato');
    }

    public function avaliacoes()
    {
        return view('papelaria.avaliacoes');
    }

    public function mensagens()
    {
        $contatos = Contato::all();
        return view('papelaria.mensagens', compact('contatos'));
    }

    public function store(Request $request)
    {
        // Validação dos campos do formulário
        $request->validate([
            'nome' => 'required',
            'email' => 'required',
            'texto' => 'required',
        ]);

        // Criação de um novo registro de Contato
        $contato = new Contato();
        $contato->nome = $request->input('nome');
        $contato->email = $request->input('email');
        $contato->texto = $request->input('texto');
        $contato->save();

        $produtos = Produto::all(); // Substitua 'Produto' pelo nome correto do modelo de produtos

        return view('papelaria.index', compact('produtos'));
    }
    
}


