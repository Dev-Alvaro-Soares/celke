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
25) No controller estabelece a lógica para recuperar dados da tabela dentro da função index que corresponde ao listar da página - Eloquent ORM
26) Define uma diretiva @forelse para iterar sobre a coleção de dados do BD, assim permitindo apresentar todos os dados na view. 
27) Criação de uma rota para apresentação --> user.show
28) Na controller, cria uma função que retorna uma view chamada de users.show / Ocorre a passagem de dados 
29) Na view do listar acrescenta um link para direcionar ao apresentar 
30) Cria uma view para o apresentar --> Comando: php artisan make:view users/show
31) Na view show, cria conteudo HTML com um link para redirecioanar a pasta raiz (listar)
32) Na view Show, recupera de forma dinâmica os dados armazenados na tabela e os apresenta (id / name / email / cadastrado)
33) Utilização da biblioteca nativa do Laravel (Carbon) para converter o horário apresentado pelo sistema
34) Adicionou uma rota para editar 
35) Na view raiz (listar), criou um link para editar
36) Criação do método para a edição
37) Criação de uma view para editar
38) Por fim, estabeleceu um link para navegar entre as páginas e configurou as rotas
39) Criação de uma rota para armazenar os dados recebidos da edição (edit)
40) Na view do Edit, reaproveitou o código de erro e formulário aplicado no create
41) Aproveitou o código utilizado no create do formulário, para deixar programado de forma que ao selecionar o "editar" seja apresentado as informções de nome e email salvas no banco de dados.
42) Definido a chamada do formulário e a rota. Fez na controller o método responsável pela atualização
43) Dentro do método estabeleceu uma validação, de forma a possibilitar a . 


## Voltar a assitir o vídeo aos 1:07:10m  -  https://www.youtube.com/watch?v=ZQJdYM1m4q0 ##