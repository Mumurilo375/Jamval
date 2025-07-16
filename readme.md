### Requisitos
- PHP 8.2 ^
- Composer
- Mysql

### Configuração
1. Configure a variável $dbParams em src/core/Database.php.
2. Crie o banco de dados.
3. Execute o comando
```bash
composer create-db
```


### Execução
Atualizar tabelas:
```bash
composer update-db
```

Executar o projeto
```bash
composer start
```