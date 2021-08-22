<?php

namespace App\Http\Controllers;

use App\Models\Despesas;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DespesasController extends Controller
{

    public function index()
    {
        $userId = Auth::user()->id;
        $despesas = Despesas::where('user_id', '=', $userId)->get();
        return $despesas;
    }


    public function store(Request $request)
    {
        $userId = Auth::user()->id;

        $request->validate([
            'data' => 'required|date|before:tomorrow',
            'valor' => 'required|numeric|min:0',
            'descricao' => 'required|max:191'
        ]);

        return Despesas::create([
            'user_id' => $userId,
            'data' => $request->data,
            'valor' => $request->valor,
            'descricao' => $request->descricao
        ]);
    }


    public function show($id)
    {
        return Despesas::find($id);
    }


    public function update(Request $request, $id)
    {
        $despesas = Despesas::find($id);
        $despesas->update($request->all());
        return $despesas;
    }


    public function destroy($id)
    {
        return Despesas::destroy($id);
    }

}
