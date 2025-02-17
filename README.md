# Todo App

Aplicação de gerenciamento de tarefas desenvolvida com Laravel e PHP, proporcionando uma interface intuitiva para organizar e acompanhar suas atividades diárias.

## Tecnologias Utilizadas

- **Laravel**: Framework PHP para desenvolvimento web.
- **Docker**: Plataforma para criação e gerenciamento de contêineres.
- **MySQL**: Banco de dados relacional.
- **Nginx**: Servidor web.
- **PHP-FPM**: Gerenciador de processos FastCGI para PHP.
- **PHPMyAdmin**: Ferramenta de administração do MySQL.

## Funcionalidades

- Registro de usuários com confirmação de senha.
- Autenticação de usuários.
- Criação, leitura, atualização e exclusão (CRUD) de tarefas.
- Filtro de tarefas por data.
- Contagem de tarefas concluídas e não concluídas.
- Interface intuitiva para gerenciamento de tarefas.

## Estrutura do Projeto

### Docker

- **app**: Contêiner da aplicação Laravel.
- **db**: Contêiner do banco de dados MySQL.
- **phpmyadmin**: Contêiner do PHPMyAdmin para administração do banco de dados.
- **nginx**: Contêiner do servidor web Nginx.

### Laravel

- **Controllers**: Controladores para gerenciar as requisições HTTP.
- **Models**: Modelos para representar as entidades do banco de dados.
- **Views**: Arquivos Blade para renderização das páginas.
- **Routes**: Definição das rotas da aplicação.

## Configuração

1. Clone o repositório:
    ```bash
    git clone https://github.com/seu-usuario/todo-app.git
    ```

2. Navegue até o diretório do projeto:
    ```bash
    cd todo-app
    ```

3. Copie o arquivo `.env.example` para `.env` e configure as variáveis de ambiente:
    ```bash
    cp .env.example .env
    ```

4. Construa e inicie os contêineres Docker:
    ```bash
    docker-compose up --build
    ```

5. Acesse a aplicação no navegador:
    ```
    http://localhost
    ```

## Licença

Este projeto está licenciado sob a [MIT License](LICENSE).

