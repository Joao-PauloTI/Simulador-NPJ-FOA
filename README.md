# Simulador-NPJ-FOA

*Disponível para acesso em http://heroku-simulador-npj-foa.herokuapp.com/*

# Requisitos para instalação:
- Wampserver, LAMP, MAMP ou XAMPP com Phpmyadmin e PHP 7.2 ou outra versão mais recente;
- Composer (https://getcomposer.org/);
- Nodejs (https://nodejs.org/en/download/);
- Laravel (https://laravel.com/docs/6.x).

# Instalação do Projeto:
- Clone o projeto, abra o cmd/terminal na pasta /Simulador-NPJ-FOA e instale as dependências com o comando `composer install`;
- Na pasta /Simulador-NPJ-FOA, crie um arquivo chamado .env e cole este código no mesmo: https://github.com/laravel/laravel/blob/master/.env.example . Em seguida, inclua o nome do banco de dados e seu usuário e senha do localhost/phpmyadmin em seus respectivos campos: `DB_DATABASE`, `DB_USERNAME` e `DB_PASSWORD`;
- Gere a encryption key do .env com o comando `php artisan key:generate`;
- Crie o banco de dados no localhost/phpmyadmin com o mesmo nome inserido no `DB_DATABASE` do .env e faça a migração das tabelas com o comando `php artisan migrate`;
- Depois de tudo isso, a aplicação estará funcionando normalmente por meio do comando `php artisan serve`.
- Caso queira acessar a pasta de arquivos enviados pelo formulário da página de Distribuição Eletrônica, use o comando `php artisan storage:link`. A partir de agora, todos os documentos salvos no banco de dados estarão disponíveis na pasta /Simulador-NPJ-FOA/public/storage/Documentos.

# Compilando o Vue.js:
- Um projeto em Laravel já vem configurado para receber e usar as depêndencias do Vue, React e Bootstrap. Portanto, para criar e utilizar componentes do Vue nas views deste projeto, apenas instale as dependências do Vue com o comando 'npm install' no cmd/terminal.
- Em seguida, compile as alterações nos arquivos do Vue com o comando `npm run dev`. Quando estiver fazendo várias alterações em um componente ou qualquer arquivo.vue, você pode deixar um cmd/terminal aberto executando o comando `npm run watch` para compilar as alterações automaticamente.

# Principais arquivos e pastas:
- app/Http/Controllers/: é onde os controllers ficam.
- database/migrations/: é onde as migrações de tabelas do banco de dados ficam.
- public/css/ e public/js: é onde os scripts em CSS e JS ficam.
- public/css/app.css e public/js/app.js: são os arquivos que carregam o Bootstrap e Vue ou React.
- resources/views/: é onde as views ficam.
- resources/js/components/: é onde os componentes do vue ou react ficam.
- resources/js/app.js: é o arquivo que registra os componentes do Vue ou React.
- routes/web.php: é o arquivo que registra as rotas das views.
- .env: é o arquivo de configuração do ambiente local (geralmente só é necessário configurar manualmente a parte de banco de dados como DB_DATABASE, DB_USERNAME, DB_PASSWORD, etc). Esse arquivo é ignorado pelo git.
