Requerimientos
    Docker
    Laravel 8

Instalacion
    Configurar .env con los siguientes datos
        DB_CONNECTION=mysql
        DB_HOST=mysql
        DB_PORT=3306
        DB_DATABASE=dbtkudo
        DB_USERNAME=tkudo
        DB_PASSWORD=tkudo
    Ejecutar el siguiente comando para generar alias para los comandos de Laravel Sail
        source .zshrc
    Ejecutar el siguiente comando para las migraciones
        sail artisan migrate
    Ingresar a 
        http://localhost

Comandos de ejecucion
    Levantar docker
        sail up -d
    Bajar docker
        sail down

