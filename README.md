* PHP 8.2 ou superior
* Composer

## Como rodar o projeto baixado


## Sequência para criar o projeto 
Criar o projeto com Laravel
'''
composer create-project laravel/laravel
'''

Iniciar o projeto criado com Laravel
'''
php artisan serve  -  Rodar servidor
'''

Criar View
php artisan make:view [nome-arquivo] 
'''
php artisan make:view [diretorio/nome-arquivo]  
'''

Executar as migration
'''
php artisan migrate 
'''

Criar models
'''
php artisan make:model [NomeDaModel]
'''

Criar um arquivo de Request com validações
'''

php artisan make:request [NomeDoRequest]
'''

## Fluxo de construção do Projeto 

1) Definição de uma rota apontando para um controller chamado de UserController
2) Criação do controller pelo composer --> Comando:  php artisan make:controller [NomeDaController] / Importação da controller para as rotas --> Comando: use App\Http\Controllers\UserController;
3) Na controller (principal) UserController, é criada uma função com visibilidade pública (para que possa ser acessada fora da classe) com o nome de index, que possui como finalidade carregar a View
4) Criação de uma view pelo terminal chamada de index dentro de um diretório chamado de users --> Comando: php artisan make:view users/index
5) Definição da estrutura básica do HTML na view chamada de Index
6) Acessar o arquivo .env para configurar as credenciais do Banco de dados. (09:25 ~ 12:15)
7) Criar a base da dados --> Comando: php artisan migrate
8) Criar a models
9) Criar uma rota para carregar o arquivo de formulário
10) Na controller, é criada uma função com visibilidade pública agora com o nome de users.index para carregar outra view
11) Criação de uma view pelo terminal com o nome de users/create
12) Definição da estrutura básica do HTML na view chamada de create
13) Criação de um link no HTML da página raiz para navegar até a página create-user e vice versa
14) No arquivo create (formulário), adicionou uma tag de <form>..</form> com uma proteção CSRF e indicando o método @method
15) Construção do formulário 
16) Definição de uma rota para enviar os dados do formulario (store-user) 
17) Atualização da tag de <form>..</form> com a inclusão no atributo action da rota user-store
18) Na controller, é criado uma função para a implementação da validação 
19) Uso da funcionalidade Laravel para a implementação da validação --> php artisan make:request UserRequest / A validação indica as regras de controle do formulário 
20) Definição das regras de controle e mensagens de erro apresentadas
21) No controller é realizado a injeção de dependência do UserRequest
22) Ajuste nos campos do formulário - Permanece os dados usados na última tentativa de acesso  --> Função old({{ 'NomeDoCampo' }})
23) Na controller, criou uma função para cadastro do usuário armazenando os dados da página de cadastro / Redireciona para a página raiz 
24) Na view index (listar) apresenta uma mensagem de sucesso --> Atráves de uma condicional if e o helper with() - encaminhar dados para a sessão (normalmente para exibir mensagens temporárias como "Usuário criado com sucesso!")
25)



## Voltar a assitir o vídeo aos 30m  -  https://www.youtube.com/watch?v=ZQJdYM1m4q0 ##