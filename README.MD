# Sistema de busca por clientes

Aplicação para efetuar uma busca por clientes listando no resultado os seus dados.
	

### Requisitos
- PHP
- Mysql
- Composer


### Install
- Clone o repositório
```
https://github.com/4ndrenobr3/busca_usuarios.git
```

- Instale as dependências com o composer
```
composer install
```

- O arquivo do banco de dados, encontra - se no diretório principal.
execute o banco.
````
busca_usuario/db.sql
````

- Edite as informações do banco no arquivo bootstrap.php

### Importante! Execute o sistema com o servidor embutido do php!
````
php -S localhost:8080 -t public/
````