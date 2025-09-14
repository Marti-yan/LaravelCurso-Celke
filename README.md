## Requisitos

* PHP 8.2 ou superior - Conferir a versão: php -v
* Composer - Conferir a instalação: composer --version
* Node.js 22 ou superior - Conferir a versão: node -v
* GIT - Conferir se está instalado o GIT: git -v
* MySQL 8.0 ou superior - conferir versão: mysql --version

## Como rodar o projeto baixado

- Duplicar o arquivo ".env.example" e renomear para ".env".
- Alterar as credenciais do banco de dados.
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=celke
DB_USERNAME=root
DB_PASSWORD=
```


Instalar as dependências do PHP.
```
    composer install
```

Instalar as dependências do Node.js
```
    npm install
```

Executar as bibliotecas do Node.js
```
    npm run dev
```

Gerar a chave no arquivo .env.
```
    php artisan key:generate
```

Executar as migrations para criar as tabelas e as colunas.
```
    php artisan migrate
```

Iniciar o projeto criado com Laravel. (Caso não use o Herd)
```
    php artisan serve
```

Acessar a página criada com Laravel.
```
    http://127.0.0.1:8000
```

## Sequência para criar o projeto do zero

Criar o projeto com Laravel (Modo completo);
- Stack de autenticação;
- Banco de dados;
- Front-End;
- testes;
  
* Necessario laravel estar instalado globalmente:
```
    composer global require laravel/installer
```
```
    laravel new nome-do-projeto
```


# Criar o projeto com Laravel (Modo simples, rapido)
```
    UTILIZADO NO CODIGO: composer create-project laravel/laravel .
```

Instalar as dependências do PHP.
```
    composer install
```

Instalar as dependências do Node.js
```
    npm install
```

Executar as bibliotecas do Node.js
```
    npm run dev
```

Iniciar o projeto criado com laravel(caso não utilize o Herd);
```
    php artisan serve
```

Criar Controller com php artisan
```
    php artisan make:controller CursoController
```

Criar View com php artisan
```
    php artisan make:view cursos.index
```
(o curso seria o diretorio e o index o arquivo, faz assim quando não se tem o diretorio criado)

Criar Migration com php artisan
```
    php artisan make:migration create_cursos_table
```
(recomendado é ultilizar a 1° parte 'create' com o oque vai ser feito, 'create' pra criar a tabela, 'add' pra quando for adicionar algo na tabela, 'delete'... / 2° parte com o nome desejado / 3° 'table' se for uma tabela que esta sendo mexida.)

Executar as migrations para criar as tabelas e as colunas.
```
    php artisan migrate
```


## Autor

Este projeto foi desenvolvido por [Yan Martins](https://github.com/marti-yan);

## Licença

Este projeto está licenciado sob a licença MIT - veja o arquivo [LICENSE](LICENSE.txt) para mais detalhes.
