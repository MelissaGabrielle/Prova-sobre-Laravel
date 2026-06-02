# FerramentaStock

Um sistema simples para cadastro e gerenciamento de ferramentas de uma loja.

## Sobre o projeto

O **FerramentaStock** é uma aplicação desenvolvida com Laravel para facilitar o controle de estoque e o gerenciamento de ferramentas em lojas, depósitos ou oficinas.

O sistema permite cadastrar, editar, excluir e visualizar ferramentas, mantendo informações importantes organizadas em um único lugar. Além disso, possibilita o gerenciamento de categorias para uma melhor classificação dos produtos.

### Objetivos do sistema

* Organizar o estoque de ferramentas.
* Controlar a quantidade disponível de cada item.
* Monitorar níveis mínimos de estoque.
* Facilitar o cadastro e a consulta de produtos.
* Tornar a gestão da loja mais prática e eficiente.

## Recursos principais

### Gerenciamento de Ferramentas

* Cadastro de novas ferramentas.
* Edição de informações dos produtos.
* Exclusão de ferramentas cadastradas.
* Listagem completa das ferramentas disponíveis.

### Controle de Estoque

* Registro da quantidade em estoque.
* Definição de estoque mínimo para cada ferramenta.
* Acompanhamento da disponibilidade dos produtos.

### Categorias de Ferramentas

* Cadastro de categorias.
* Edição e exclusão de categorias.
* Associação de cada ferramenta à sua respectiva categoria.

### Upload de Imagens

* Envio de imagens para identificação visual dos produtos.
* Exibição das imagens na interface do sistema.

### Interface Intuitiva

* Construída utilizando templates Blade do Laravel.
* Navegação simples e de fácil utilização.

## Tecnologias utilizadas

* PHP
* Laravel
* Blade Templates
* MySQL
* HTML5
* CSS3
* JavaScript
* Node.js
* NPM

## Como executar o projeto

### 1. Clonar o repositório

```bash
git clone https://github.com/seu-usuario/ferramentastock.git
cd ferramentastock
```

### 2. Instalar as dependências do backend

```bash
composer install
```

### 3. Configurar o ambiente

Copie o arquivo de configuração:

```bash
cp .env.example .env
```

Gere a chave da aplicação:

```bash
php artisan key:generate
```

### 4. Configurar o banco de dados

Abra o arquivo `.env` e configure os dados de conexão do banco:

```env
DB_DATABASE=nome_do_banco
DB_USERNAME=usuario
DB_PASSWORD=senha
```

### 5. Executar as migrations

```bash
php artisan migrate
```

### 6. Instalar dependências do frontend

```bash
npm install
```

### 7. Compilar os arquivos do projeto

```bash
npm run build
```

### 8. Iniciar o servidor

```bash
php artisan serve
```

O sistema estará disponível em:

```text
http://127.0.0.1:8000
```

## Estrutura do sistema

O projeto é organizado em módulos responsáveis pelo gerenciamento de:

* Ferramentas
* Categorias de ferramentas
* Controle de estoque
* Upload de imagens
* Interface administrativa

## Possíveis melhorias futuras

* Sistema de autenticação de usuários.
* Controle de fornecedores.
* Registro de vendas.
* Relatórios de estoque.
* Dashboard com indicadores.
* Histórico de movimentação de produtos.
* Sistema de alertas para estoque baixo.

## Observações

* Certifique-se de possuir PHP, Composer, Node.js e NPM instalados.
* Configure corretamente o banco de dados antes de executar as migrations.
* Recomenda-se utilizar MySQL para armazenamento dos dados.

## Licença

Este projeto foi desenvolvido para fins acadêmicos e de aprendizado, podendo ser adaptado conforme as necessidades da sua loja ou empresa.
