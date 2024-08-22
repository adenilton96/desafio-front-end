# desafio-front-end


## Descrição

Este projeto é uma aplicação web desenvolvida com Laravel, um framework PHP, utilizando Blade para o gerenciamento das views. 

## Tecnologias Utilizadas

- **Laravel**: Framework PHP para desenvolvimento web.
- **PHP**: Linguagem de programação.
- **Blade**: Motor de templates do Laravel para criação de views.
- **Composer**: Gerenciador de dependências para PHP.
- **Node.js e npm** 

## Requisitos
- PHP >= 8.0
- Composer
- Node.js e npm 

## Instalação e Configuração

1. **Clone o repositório**

   ```bash
   git clone https://github.com/adenilton96/desafio-front-end.git
   cd nome-do-repositorio

2. **Instale as dependências do projeto**

    ```bash
    composer install

3. **Configure o ambiente**

    Copie o arquivo .env.example para um novo arquivo .env:

4. **Gere a chave de aplicação**

    ```bash
    php artisan key:generate

5. **Inicie o servidor de desenvolvimento**
    
    ```bash
    php artisan serve

**Estrutura do Projeto**

    app/: Código-fonte da aplicação, incluindo controllers, models e services.
    config/: Arquivos de configuração.
    database/: Migrações, seeds e fábricas do banco de dados.
    public/: Arquivos acessíveis publicamente, como CSS, JavaScript e imagens.
    resources/views/: Arquivos Blade para criação das views.
    resources/lang/: Arquivos de tradução e linguagem.
    routes/: Definições de rotas da aplicação.
    storage/: Logs e arquivos gerados pela aplicação.
    tests/: Testes automatizados.
