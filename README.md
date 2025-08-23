# 📘 Portal de Atividades Escolares

Sistema desenvolvido em **Laravel 12** para gerenciar as atividades escolares.  
O objetivo é permitir que **professores** cadastrem suas atividades diretamente no portal, e que **alunos e pais** possam acompanhar as demandas e manter tudo em dia.  
Os **coordenadores** são responsáveis apenas pela criação de novos usuários e pelo gerenciamento geral das atividades.  

---

## 🚀 Tecnologias

- [PHP 8.2+](https://www.php.net/)  
- [Laravel 12](https://laravel.com/)  
- [MySQL 8+](https://www.mysql.com/)  
- Composer  
- Docker (opcional, mas recomendado)  

---

## 📂 Estrutura do Banco

O sistema possui as seguintes entidades principais:

- **users** → Todos os usuários do sistema (professores, coordenadores, alunos, pais).  
- **user_types** → Define os tipos de usuário (professor, coordenador, aluno, pai).  
- **grades** → Séries/anos escolares.  
- **sections** → Seções dentro de cada ano/série (ex: A, B, C).  
- **classes** → Combinação de série + seção (ex: 5º Ano A).  
- **subjects** → Disciplinas (Matemática, História, etc).  
- **files** → Arquivos anexados às atividades.  
- **activities** → Atividades criadas pelos professores (com prazo, descrição e arquivos).  
- **activities_n_classes** → Pivot: vincula atividades a uma ou mais turmas.  
- **users_has_activities** → Pivot: vincula usuários às atividades (ex: professor responsável).  

---

## ⚙️ Instalação

Clone o repositório:

```bash
git clone https://github.com/seu-usuario/nome-do-projeto.git
cd nome-do-projeto
```

Instale as dependências:

```bash
composer install
```

Copie o arquivo `.env.example`:

```bash
cp .env.example .env
```

Gere a chave do Laravel:

```bash
php artisan key:generate
```

Configure o `.env` com suas credenciais do MySQL:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=escola_db
DB_USERNAME=root
DB_PASSWORD=secret
```

---

## 🗄️ Migrations

Crie o banco de dados e rode as migrations:

```bash
php artisan migrate
```

Se quiser popular com dados iniciais (tipos de usuário e um coordenador administrador):

```bash
php artisan db:seed
```

---

## 🔑 Usuários iniciais

O seeder cria os seguintes tipos de usuário por padrão:

- **Coordenador** → cria e gerencia usuários, supervisiona atividades no geral.  
- **Professor** → pode cadastrar atividades vinculadas às suas turmas e disciplinas.  
- **Aluno/Pai** → acesso somente para acompanhar atividades e demandas escolares.  

---

## ▶️ Executar o servidor

```bash
php artisan serve
```

Acesse em: [http://localhost:8000](http://localhost:8000)

---

## 📌 Rotas principais

- `/login` → Autenticação de usuários.  
- `/dashboard` → Painel inicial (diferente para cada tipo de usuário).  
- `/atividades` → Professores podem cadastrar novas atividades.  
- `/minhas-atividades` → Alunos e pais podem acompanhar atividades.  
- `/usuarios` → Coordenadores podem criar e gerenciar contas.  

---

