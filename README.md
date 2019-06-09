# Simulador-NPJ-FOA
Instalação do Projeto:
- Extraia o arquivo e, dentro dele, instale as dependências com o comando 'composer install' no cmd/terminal;
- Renomeie o arquivo '.env.example' para apenas '.env' e configure o nome do banco de dados e seu usuario e senha;
- Gere a encryption key do '.env' com o comando 'php artisan key:generate';
- Crie o banco de dados e faça a migração das tabelas com o comando 'php artisan migrate';
- Depois de tudo isso, a aplicação estará funcionando normalmente.

Utilizando o Vue.js:
- Na pasta do projeto, instale as dependências do Vue com o comando 'npm install' no cmd/terminal.
- Caso faça alterações em algum arquivo.vue, deixe um terminal aberto executando o comando npm run watch para compilar as alterações automaticamente.

Principais arquivos e pastas:
- app/Http/Controllers/: é onde os controllers ficam.
- database/migrations/: é onde as migrações de tabelas do banco de dados ficam.
- public/css/ e public/js: é onde seus scripts em CSS e JS ficam.
- public/css/app.css e public/js/app.js: são os arquivos que carregam o bootstrap e vue ou react (se estiver usando).
- resources/views/: é onde as views ficam.
- resources/js/components/: é onde os componentes do vue ou react ficam (se estiver usando).
- resources/js/app.js: é o arquivo que registra os componentes do vue ou react (se estiver usando).
- routes/web.php: é o arquivo que registra as rotas das suas views.
- .env: é o arquivo de configuração do ambiente local (geralmente só é necessário configurar a parte de banco de dados como DB_DATABASE, DB_USERNAME, DB_PASSWORD, etc). Esse arquivo vem nomeado como .env.example quando é baixado pela github e não vem com encryption key.
