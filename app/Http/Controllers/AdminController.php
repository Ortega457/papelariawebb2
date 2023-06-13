<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class AdminController extends Controller
{
    public function index(){
        $clientes = Cliente::all();

        return view('clientes.index', compact('clientes'));
    }
}
