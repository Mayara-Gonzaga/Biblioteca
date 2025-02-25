
Biblioteca 📚

Este é um projeto full stack de uma Biblioteca desenvolvido com Laravel (backend) e React (frontend). O sistema permite cadastrar, listar, editar, visualizar e deletar livros, além de possuir campo de busca por título e paginação com 10 livros por página.

🚀 Tecnologias
	•	Backend: Laravel (PHP)
	•	Banco de Dados: MySQL
	•	Frontend: React + Vite
	•	Gerenciador de Pacotes: Composer & npm

⚙ Pré-requisitos

Antes de começar, certifique-se de ter instalado em seu sistema:
	•	PHP >= 8.1
	•	Composer
	•	MySQL
	•	Node.js >= 16
	•	XAMPP ou outro servidor local (caso necessário)

🔧 Configuração do Backend (Laravel)
	1.	Clone o repositório

git clone https://github.com/Mayara-Gonzaga/Biblioteca.git
cd Biblioteca


	2.	Instale as dependências do Laravel

composer install


	3.	Crie o arquivo de ambiente

cp .env.example .env


	4.	Configure o banco de dados
No arquivo .env, edite as credenciais do MySQL:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=library
DB_USERNAME=root
DB_PASSWORD=


	5.	Crie a base de dados e execute as migrations

php artisan migrate --seed


	6.	Gere a chave da aplicação

php artisan key:generate


	7.	Inicie o servidor Laravel

php artisan serve

O backend estará disponível em http://127.0.0.1:8000.

🎨 Configuração do Frontend (React)
	1.	Acesse a pasta do frontend

cd library-frontend


	2.	Instale as dependências

npm install


	3.	Crie um arquivo .env na pasta library-frontend e adicione:

VITE_API_URL=http://127.0.0.1:8000/api


	4.	Inicie o frontend

npm start

O frontend estará disponível em http://localhost:3000.

📌 Funcionalidades

✅ Cadastro, listagem, edição, visualização e remoção de livros (CRUD)
✅ Campo de busca por título na listagem
✅ Paginação com 10 livros por página
✅ Interface responsiva
✅ Backend estruturado com boas práticas


📝 Licença

Este projeto está sob a licença MIT. Sinta-se à vontade para utilizá-lo e melhorá-lo!

