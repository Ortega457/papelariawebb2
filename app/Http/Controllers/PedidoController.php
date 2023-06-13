<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Produto;
use App\Models\Pedido;
use App\Models\Categoria;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index()
    {
        $pedidos = Pedido::with('cliente', 'produto')->get();

        return view('pedidos.index', compact('pedidos'));
    }

    public function pedidos()
    {
        $pedidos = Pedido::with('cliente', 'produto')->get();

        return view('pedidos.pedidos', compact('pedidos'));
    }

    public function create($produtoId)
    {
        $produto = Produto::find($produtoId);
        $clientes = Cliente::all();
        $categorias = Categoria::all();
    
        return view('pedidos.create', compact('produto', 'clientes', 'categorias'));
    }
    
    
    
    public function store(Request $request)
    {
        $request->validate([
            'produto_id' => 'required',
            'cliente' => 'required',
            'quantidade' => 'required',
        ]);
    
        $produtoId = $request->produto_id;
        $clienteId = $request->cliente;
        $quantidade = $request->quantidade;
    
        $produto = Produto::find($produtoId);
    
        if (!$produto) {
            return redirect()->route('pedidos.index')->with('error', 'Produto não encontrado.');
        }
    
        // Realize os cálculos necessários para obter o total do pedido
        $totalPedido = $produto->valor * $quantidade;
    
        // Salve o pedido no banco de dados
        $pedido = new Pedido();
        $pedido->produto_id = $produtoId;
        $pedido->cliente_id = $clienteId;
        $pedido->quantidade = $quantidade;
        $pedido->total_pedido = $totalPedido;
        $pedido->save();
    
        return redirect()->route('pedidos.index')->with('success', 'Pedido criado com sucesso.');
    }
    
    
    public function update(Request $request, $id)
    {
        $pedido = Pedido::findOrFail($id);
    
        $request->validate([
            'cliente' => 'required',
            'produto' => 'required',
            'quantidade' => 'required',
        ]);
    
        $pedido->cliente_id = $request->cliente;
        $pedido->produto_id = $request->produto;
        $pedido->quantidade = $request->quantidade;
        // Atualize quaisquer outros campos necessários
    
        $pedido->save();
    
        return redirect()->route('pedidos.pedidos')->with('success', 'Pedido atualizado com sucesso');
    }

    public function edit($id)
{
    $pedido = Pedido::findOrFail($id);
    $clientes = Cliente::all();
    $produtos = Produto::all();

    return view('pedidos.edit', compact('pedido', 'clientes', 'produtos'));
}

public function destroy(Pedido $pedido)
{
    $pedido->delete();

    return redirect()->route('pedidos.pedidos')->with('success', 'Produto excluído com sucesso!');
}

    
}
