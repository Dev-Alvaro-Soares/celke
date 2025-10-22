<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    //
    public function index() {
        // Carregar a View
        return view('users.index');
    }

    public function create() {
        return view('users.create');
    }

      // Injeção de dependência do UserRequest
    public function store(UserRequest $request) {
          // Validar o formulário 
        $request->validated();

          // Cadastrar o usuário
        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => $request->password,
        ]);

        return redirect()->route('user.index')->with('success', 'Usuário cadastrado com sucesso!');
    }
}
