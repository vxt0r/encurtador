# Encurtador de URLs
### PHP, MySQL, HTML e CSS
<a href="https://youtu.be/cR7Fzwg5Nng" target="_blank" rel="noopener noreferrer">Veja um vídeo demonstrativo</a>
#### Como usar
**Criar um arquivo Config.php na pasta app, com as credenciais do banco de dados (MySQL)**
    
    define('DB',[
        'host' => '',
        'db' => '',
        'user' => '',
        'pass' => ''
    ]);

**Criar uma tabela**

    create table urls(
        id int primary key auto_increment,
        url varchar(255) not null
    );

**E rodar o servidor**

    composer install
    cd public
    php -S localhost:8080 
