# Simulador-NPJ-FOA
Instalação do Projeto (caso o Laravel já esteja instalado em sua máquina):
- Extraia o arquivo e, dentro dele, instale as dependências do Laravel com o comando 'composer install' no cmd/terminal;
- Renomeie o arquivo '.env.example' para apenas '.env' e, se tiver utilizando, configure o nome do banco de dados e seu usuario e senha. Caso o .env.example tenha sido ignorado após o repositório ser clonado, crie um arquivo .env e copie e cole o código: https://github.com/laravel/laravel/blob/master/.env.example .;
- Gere a encryption key do '.env' com o comando 'php artisan key:generate';
- Crie o banco de dados e faça a migração das tabelas com o comando 'php artisan migrate' (se tiver utilizando);
- Depois de tudo isso, a aplicação estará funcionando normalmente.

Compilando o Vue.js:
- Um projeto em Laravel já vem configurado para receber e usar as depêndencias do Vue, React e Bootstrap. Portanto, para criar e utilizar componentes do Vue nas views deste projeto, apenas instale as dependências do Vue com o comando 'npm install' no cmd/terminal (se o npm estiver instalado).
- Quando estiver editando um componente ou qualquer arquivo.vue, deixe um terminal aberto executando o comando npm run watch para compilar as alterações automaticamente.

Principais arquivos e pastas:
- app/Http/Controllers/: é onde os controllers ficam.
- database/migrations/: é onde as migrações de tabelas do banco de dados ficam.
- public/css/ e public/js: é onde os scripts em CSS e JS ficam.
- public/css/app.css e public/js/app.js: são os arquivos que carregam o Bootstrap e Vue ou React.
- resources/views/: é onde as views ficam.
- resources/js/components/: é onde os componentes do vue ou react ficam.
- resources/js/app.js: é o arquivo que registra os componentes do Vue ou React.
- routes/web.php: é o arquivo que registra as rotas das views.
- .env: é o arquivo de configuração do ambiente local (geralmente só é necessário configurar a parte de banco de dados como DB_DATABASE, DB_USERNAME, DB_PASSWORD, etc). Esse arquivo vem nomeado como .env.example quando é baixado pela github e não vem com encryption key.
