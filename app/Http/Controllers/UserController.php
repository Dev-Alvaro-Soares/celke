<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index() {

        // Recuperar os registros do BD 
        $users = User::orderByDesc('id')->get();

        // Carregar a View / Passa os dados do BD para a view atráves da tabela 'users'
        return view('users.index', ['users' => $users]);
    }

    public function show(User $user) {
      return view('users.show', ['user' => $user]);
    } 

    public function create() {
        return view('users.create');
    }

      // Injeção de dependência do UserRequest
    public function store(UserRequest $request) {
          // Validar o formulário 
        $request->validated();

          // Cadastrar o usuário no BD
        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => $request->password,
        ]);

          // Redirecionar o usuário e apresentar mensagem de sucesso
        return redirect()->route('user.index')->with('success', 'Usuário cadastrado com sucesso!');
    }
}
