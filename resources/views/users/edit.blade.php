<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke</title>
</head>
<body>
    
    <a href="{{ route('user.index') }}">Listar</a><br>
    <a href="{{ route('user.show', ['user' => $user->id]) }}">Visualizar</a>
    <h2>Editar Usuário</h2>

      <!-- Exibir erros de validação - Se existir erros acessa esse if então percorrer as mensagens de erro -->
    @if($errors->any()) 
        @foreach($errors->all() as $error)
         <p style="color: #f00;">
            {{ $error }}
         </p>    
        @endforeach
        
    @endif

   
    <form action="{{ route('user.update', ['user' => $user->id]) }}" method="POST">
        @csrf
        @method('PUT')

          <!-- Campos do formulário -->
        <label>Nome: </label>
          <!-- Reaproveitou o código do create.blade.php e adicionou o segundo parâmetro na função old() para preencher o campo com o valor atual do usuário existente no Banco de dados-->
        <input type="text" name="name" placeholder="Nome completo" value="{{ old('name', $user->name) }}"><br><br>

        <label><E-mail></E-mail>E-mail: </label>
        <input type="email" name="email" placeholder="Melhor email do usuário" value="{{ old('email', $user->email) }}"><br><br>

        <label>Senha: </label>
        <input type="password" name="password" placeholder="Senha no mínimo com 6 caracteres" value="{{ old('password') }}"><br><br>

        <button type="submit">Salvar</button>
    </form>

</body>
</html>
