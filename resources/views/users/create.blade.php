<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke</title>
</head>
<body>
    
     <a href="{{ route('user.index') }}">Listar</a>

    <h2>Cadastrar usuário</h2>

      <!-- Exibir erros de validação - Se existir erros acessa esse if então percorrer as mensagens de erro -->
    @if($errors->any()) 
        <p style="color: #f00;">
        @foreach($errors->all() as $error)
            {{ $error }}
        @endforeach
        </p>
    @endif

    <form action="{{ route('user-store') }}" method="POST">
        @csrf
        @method('POST')

          <!-- Campos do formulário -->
        <label>Nome: </label>
        <input type="text" name="name" placeholder="Nome completo"><br><br>

        <label><E-mail></E-mail>E-mail: </label>
        <input type="email" name="email" placeholder="Melhor email do usuário"><br><br>

        <label>Senha: </label>
        <input type="password" name="password" placeholder="Senha no mínimo com 6 caracteres"><br><br>

        <button type="submit">Cadastrar</button>
    </form>

</body>
</html>
