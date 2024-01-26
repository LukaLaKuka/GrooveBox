# Despliegue

El despliegue de la aplicación fue hecha en la máquina [alu7410.arkania.es](http://alu7410.arkania.es) en el enlace [GrooveBox](https://groovebox.alu7410.arkania.es).

## Indice

- [Dependencias](#dependencias)
- [Configuración Laravel](#configuración-laravel)
- [Configuración MySQL](#configuración-mysql-y-bbdd)
- [Configuración Nginx](#configuración-nginx)

### Dependencias

Las dependencias de GrooveBox son:

- Nginx
- composer
- php 7.4 fpm
- MariaDB (el servidor es Debian, por lo que para instalar MySQL hay que tener instalado MariaDB)
- MySQL
- CertBot
- NodeJS
- módulos de PHP:
  - bcmath.ini    
  - ftp.ini       
  - mysqlnd.ini     
  - shmop.ini      
  - tokenizer.ini
  - calendar.ini  
  - gd.ini        
  - opcache.ini     
  - simplexml.ini  
  - xml.ini
  - ctype.ini     
  - gettext.ini   
  - pdo.ini         
  - sockets.ini    
  - xmlreader.ini
  - curl.ini      
  - iconv.ini     
  - pdo_mysql.ini   
  - sqlite3.ini    
  - xmlrpc.ini
  - dom.ini       
  - imagick.ini   
  - pdo_sqlite.ini  
  - sysvmsg.ini    
  - xmlwriter.ini
  - exif.ini      
  - json.ini      
  - phar.ini        
  - sysvsem.ini    
  - xsl.ini
  - ffi.ini       
  - mbstring.ini  
  - posix.ini
  - ysvshm.ini
  - fileinfo.ini  
  - mysqli.ini    
  - readline.ini    
  - tidy.ini

### Configuración Laravel

Lo primero sería hacer un `git clone` de nuestro repositorio GrooveBox.

Tras clonarnos el proyecto accedemos al directorio del [proyecto de Laravel](../../src/GrooveBox) y hacemos los siguientes comandos:

```bash
# Instalamos dependencias del proyecto de Laravel:
composer install

# Instalamos las dependencias de los node_modules:
npm install

```

Ahora tendríamos que asegurarnos migrar la base de datos en [Configuración MySQL y BBDD](#configuración-mysql-y-bbdd)

Limpiamos la caché de la configuración y vistas:

```bash
php artisan config:cache

php artisan view:cache

sudo php artisan cache:clear
```

Y configuramos los permisos de las carpetas de storage y cache

```bash
    # Permisos para guardar y leer imágenes
    sudo chmod -R 755 storage

    # Permisos para trabajar con la caché
    sudo chgrp -R nginx storage bootstrap/cache
    sudo chmod -R ug+rwx storage bootstrap/cache
```

Preparamos el entorno de producción:

```bash
# Preparamos el entorno de Laravel para correr en modo producción

npm run prod
```

### Configuración MySQL y BBDD

Accedemos a MySQL con el usuario Root:

```bash
sudo mysql -u root -p
```

y creamos la base de datos que vamos a usar:

```mysql
CREATE DATABASE GrooveBox;
```

y creamos un usuario para esta base de datos y le damos permisos:

```mysql
# Creación usuario

CREATE USER 'GrooveBox'@'localhost' IDENTIFIED BY 'contraseña';

# Permisos

GRANT ALL PRIVILEGES ON GrooveBox.* TO 'GrooveBox'@'localhost';

FLUSH PRIVILEGES;
```

A continuación deberíamos configurarnos nuestro archivo `.env` para tener nuestra conexión con la BBDD configurada:

```.env
APP_NAME=GrooveBox
APP_ENV=production
APP_KEY=base64:2A+gO+Q34NIJlbdKv97sDXCeoisusjSnGg1vvWvmQ+A=
APP_DEBUG=false
APP_URL=http://groovebox.alu7410.arkania.es

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=GrooveBox
DB_USERNAME=GrooveBox
DB_PASSWORD=contraseña

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DRIVER=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

```

Ya por último lo único que faltaría sería ejecutar las migraciones de la [carpeta de migraciones](../../src/GrooveBox/database/migrations), donde se define las estructuras y relaciones de las tablas de l BBDD:
```
php artisan migrate
```

Y con esto nuestra BBDD ya estaría configurada, sin necesidad de tener ningún script SQL.


### Configuración Nginx

Creamos en el directorio `/etc/nginx/conf.d/` un fichero `.conf` en el que configuraremos la ruta y configuración de la app:

```yaml
server {
    # Tiene que coincidir con la url que hemos configurado en el .env de Laravel
    server_name groovebox.alu7410.arkania.es;
    
    # Tiene que coincidir con la ruta de la carpeta public de nuestro proyecto
    root /home/tomasantela/GrooveBox/src/GrooveBox/public;
    
    # Directivas para la subida de archivos

        client_max_body_size 32M;
        client_body_timeout 120s;
        client_header_timeout 120s;
        keepalive_timeout 120s;
        send_timeout 120s;



    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-Content-Type-Options "nosniff";

    index index.php;

    charset utf-8;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    error_page 404 /index.php;

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php7.4-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}
```

Y para terminar de configurar el servidor, ya solo ejecutamos el programa de CertBot para añadir la certificación de SSL en nuestra web:

```bash
sudo certbot --nginx
```

¡¡Seleccionaremos el `.conf` de nuestro proyecto y listo!! ¡¡Nuestra app ya estaría desplegada en producción y accesible por cualquier usuario externo!!

