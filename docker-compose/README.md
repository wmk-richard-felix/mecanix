# Script para subir o docker

## Primeira instalação
Compile a imagem do app com o seguinte comando:

>docker-compose build app

Esse comando pode levar alguns minutos para completar. Você verá um resultado similar a este:

>Output<br>
>Building app<br>
>Step 1/11 : FROM php:7.4-fpm<br>
> ---> fa37bd6db22a<br>
>Step 2/11 : ARG user<br>
> ---> Running in f71eb33b7459<br>
>Removing intermediate container f71eb33b7459<br>
> ---> 533c30216f34<br>
>Step 3/11 : ARG uid<br>
> ---> Running in 60d2d2a84cda<br>
>Removing intermediate container 60d2d2a84cda<br>
> ---> 497fbf904605<br>
>Step 4/11 : RUN apt-get update && apt-get install -y     git     curl     libpng-dev<br>
>libonig-dev     ...<br>
>Step 7/11 : COPY --from=composer:latest /usr/bin/composer /usr/bin/composer<br>
> ---> e499f74896e3<br>
>Step 8/11 : RUN useradd -G www-data,root -u $uid -d /home/$user $user<br>
> ---> Running in 232ef9c7dbd1<br>
>Removing intermediate container 232ef9c7dbd1<br>
> ---> 870fa3220ffa<br>
>Step 9/11 : RUN mkdir -p /home/$user/.composer &&     chown -R $user:$user /home/$user<br>
> ---> Running in 7ca8c0cb7f09<br>
>Removing intermediate container 7ca8c0cb7f09<br>
> ---> 3d2ef9519a8e<br>
>Step 10/11 : WORKDIR /var/www<br>
> ---> Running in 4a964f91edfa<br>
>Removing intermediate container 4a964f91edfa<br>
> ---> 00ada639da21<br>
>Step 11/11 : USER $user<br>
> ---> Running in 9f8e874fede9<br>
>Removing intermediate container 9f8e874fede9<br>
> ---> fe176ff4702b<br>
>
>Successfully built fe176ff4702b<br>
>Successfully tagged mecanix:latest<br>

Quando a compilação estiver concluída, você poderá executar o ambiente em segundo plano com:
>docker-compose up -d

>Output<br>
>Creating mecanix-db    ... done<br>
>Creating mecanix-app   ... done<br>
>Creating mecanix-nginx ... done

Isso executará seus contêineres em segundo plano. Para exibir informações sobre o estado de seus serviços ativos, execute:

>docker-compose ps

Você verá um resultado como este:
>Output<br>
>      Name                    Command              State          Ports        <br>
>-------------------------------------------------------------------------------<br>
>mecanix-app     docker-php-entrypoint php-fpm   Up      9000/tcp            <br>
>mecanix-db      docker-entrypoint.sh mysqld     Up      3306/tcp, 33060/tcp<br>
>mecanix-nginx   nginx -g daemon off;            Up      0.0.0.0:8000->80/tcp<br>

Agora, seu ambiente está funcionando! Porém, ainda precisaremos executar alguns comandos para concluir a configuração do aplicativo. Você pode usar o comando docker-compose exec para executar comandos nos contêineres de serviço, como um ls -l para exibir informações detalhadas sobre os arquivos no diretório do aplicativo:

>docker-compose exec app ls -l

<blockquote>
Output<br>
total 256<br>
-rw-rw-r-- 1 sammy 1001    738 Jan 15 16:46 Dockerfile<br>
-rw-rw-r-- 1 sammy 1001    101 Jan  7 08:05 README.md<br>
drwxrwxr-x 6 sammy 1001   4096 Jan  7 08:05 app<br>
-rwxr-xr-x 1 sammy 1001   1686 Jan  7 08:05 artisan<br>
drwxrwxr-x 3 sammy 1001   4096 Jan  7 08:05 bootstrap<br>
-rw-rw-r-- 1 sammy 1001   1501 Jan  7 08:05 composer.json<br>
-rw-rw-r-- 1 sammy 1001 179071 Jan  7 08:05 composer.lock<br>
drwxrwxr-x 2 sammy 1001   4096 Jan  7 08:05 config<br>
drwxrwxr-x 5 sammy 1001   4096 Jan  7 08:05 database<br>
drwxrwxr-x 4 sammy 1001   4096 Jan 15 16:46 docker-compose<br>
-rw-rw-r-- 1 sammy 1001   1015 Jan 15 16:45 docker-compose.yml<br>
-rw-rw-r-- 1 sammy 1001   1013 Jan  7 08:05 package.json<br>
-rw-rw-r-- 1 sammy 1001   1405 Jan  7 08:05 phpunit.xml<br>
drwxrwxr-x 2 sammy 1001   4096 Jan  7 08:05 public<br>
drwxrwxr-x 6 sammy 1001   4096 Jan  7 08:05 resources<br>
-rw-rw-r-- 1 sammy 1001    273 Jan  7 08:05 readme.md<br>
drwxrwxr-x 2 sammy 1001   4096 Jan  7 08:05 routes<br>
-rw-rw-r-- 1 sammy 1001    563 Jan  7 08:05 server.php<br>
drwxrwxr-x 5 sammy 1001   4096 Jan  7 08:05 storage<br>
drwxrwxr-x 4 sammy 1001   4096 Jan  7 08:05 tests<br>
-rw-rw-r-- 1 sammy 1001    538 Jan  7 08:05 webpack.mix.js<br>
</blockquote>

Agora, vamos executar o composer install para instalar as dependências do aplicativo:
>docker-compose exec app composer install

Você verá um resultado como este:
```sh
Output
Loading composer repositories with package information
Installing dependencies (including require-dev) from lock file
Package operations: 85 installs, 0 updates, 0 removals
  - Installing doctrine/inflector (1.3.1): Downloading (100%)         
  - Installing doctrine/lexer (1.2.0): Downloading (100%)         
  - Installing dragonmantank/cron-expression (v2.3.0): Downloading (100%)         
  - Installing erusev/parsedown (1.7.4): Downloading (100%)         
  - Installing symfony/polyfill-ctype (v1.13.1): Downloading (100%)         
  - Installing phpoption/phpoption (1.7.2): Downloading (100%)         
  - Installing vlucas/phpdotenv (v3.6.0): Downloading (100%)         
  - Installing symfony/css-selector (v5.0.2): Downloading (100%)        
…
Generating optimized autoload files
> Illuminate\Foundation\ComposerScripts::postAutoloadDump
> @php artisan package:discover --ansi
Discovered Package: facade/ignition
Discovered Package: fideloper/proxy
Discovered Package: laravel/tinker
Discovered Package: nesbot/carbon
Discovered Package: nunomaduro/collision
Package manifest generated successfully.
```