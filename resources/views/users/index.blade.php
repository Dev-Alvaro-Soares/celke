<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke</title>
</head>
<body>
    
    <a href="{{ route('user.create') }}">Cadastrar</a>

    <h2>Listar usuários</h2>

      <!-- Mensagem de sucesso -->
    @if(session('success')) 
        <p style="#086;">
            {{ session('success') }}
        </p>
    @endif

      <!--Iterar sobre coleções / Apresenta dados da tabela -->
    @forelse ($users as $user)
        ID: {{ $user->id }}<br>
        Nome: {{ $user->name }}<br>
        E-mail: {{ $user->email }}<br><hr>
    @empty

    @endforelse

</body>
</html>