# Inicialização do Projeto Laravel - CRUD

Para rodar este projeto, será necessário:

- **XAMPP** – para o banco de dados
- Colocar o projeto (via `git clone`) dentro da pasta `htdocs` do XAMPP
- Criar o banco de dados seguindo o nome disponível no arquivo `.env` ou atualizar o arquivo com o nome do banco criado

- PDF tutorial disponível no arquivo: `CRUD_Laravel_12_Bootstrap.pdf`

---

## Comandos necessários

composer install              # gera a pasta vendor com dependências PHP
npm install                   # gera a pasta node_modules com dependências JS
php artisan key:generate      # gera a chave da aplicação
php artisan migrate           # cria as tabelas no banco de dados
php artisan db:seed           # popula o banco com dados de exemplo
npm run dev                   # compila os assets (CSS/JS)
php artisan serve             # inicia o servidor de desenvolvimento
