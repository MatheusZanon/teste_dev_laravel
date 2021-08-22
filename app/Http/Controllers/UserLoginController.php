<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserLoginController extends Controller
{

    public function index()
    {
        $users = User::all();
        return 'Sucesso!';
    }


    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
