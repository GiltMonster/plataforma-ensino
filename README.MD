
# Plataforma de Ensino - Prof. Jubilut

Sistema administrativo desenvolvido em **PHP com MVC puro (sem frameworks)**, com gerenciamento de alunos, cursos e matrículas, seguindo os requisitos técnicos de uma avaliação.

## 🚀 Tecnologias utilizadas

- PHP 8.2 (em container)
- MySQL 8 (em container)
- Apache 2.4
- Composer
- PHPUnit 11
- Phinx (migrations)
- Docker + Docker Compose

## ⚙️ Como rodar o projeto com Docker

### 1. Clone o repositório

```bash
git clone https://github.com/GiltMonster/plataforma-ensino
cd plataforma-ensino
```

### 2. Suba os containers

```bash
docker-compose up --build -d
```

Serviços disponíveis:

- Aplicação: http://localhost:8080
- phpMyAdmin: http://localhost:8081  
  (login: `root`, senha: `root`)

---

### 3. Acesse o container da aplicação

```bash
docker exec -it plataforma-app bash
```

### 4. Instale as dependências e rode as migrations

```bash
composer install
vendor/bin/phinx migrate
```

> O banco de dados `plataforma` será criado automaticamente pelo container MySQL.

---

### 5. Acesse a aplicação

Abra [http://localhost:8080](http://localhost:8080) no navegador.

Credenciais padrão de acesso:

```
Email: admin@jubiplataforma.com
Senha: 123456
```

---

## 🧪 Testes Unitários

Testes escritos com PHPUnit 11, cobrindo regras básicas como autenticação e manipulação de alunos.

Dentro do container, rode:

```bash
vendor/bin/phpunit
```

> Os testes ficam na pasta `/tests` e seguem o padrão PSR-4.

---

## 📁 Estrutura do Projeto

```
/app
  /Controllers
  /Models
  /Views

/public
  index.php         <- Front Controller
  .htaccess         <- Redireciona tudo para index.php

/database
  /migrations       <- Migrations Phinx

/tests
  AlunoTest.php
  LoginControllerTest.php

Dockerfile
docker-compose.yml
phpunit.xml
composer.json
```

---

## ✅ Requisitos atendidos

- [x]  MVC puro (sem frameworks)
- [x] Login com autenticação
- [x] CRUD de Alunos
- [x] CRUD de Cursos/Áreas
- [x] CRUD de Matrículas (relacional)
- [x] Consulta por nome e email
- [x] Composer configurado
- [x] Migrations com Phinx
- [x] Testes unitários com PHPUnit
- [x] Ambiente em container (Docker)

---

## 📝 Observações

- O Apache foi configurado para servir diretamente a pasta `/public` como root.
- O `.htaccess` está ativo para roteamento amigável.
- O projeto foi desenvolvido para fins de avaliação técnica.

---
```