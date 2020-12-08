# Script para subir o docker

## Primeira instalação
Compile a imagem do app com o seguinte comando:

>docker-compose build app

Esse comando pode levar alguns minutos para completar. Você verá um resultado similar a este:

>Output
>
>Building app
>
>Step 1/11 : FROM php:7.4-fpm
> ---> fa37bd6db22a
>Step 2/11 : ARG user
> ---> Running in f71eb33b7459
>Removing intermediate container f71eb33b7459
> ---> 533c30216f34
>Step 3/11 : ARG uid
> ---> Running in 60d2d2a84cda
>Removing intermediate container 60d2d2a84cda
> ---> 497fbf904605
>Step 4/11 : RUN apt-get update && apt-get install -y     git     curl     libpng-dev     >libonig-dev     ...
>Step 7/11 : COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
> ---> e499f74896e3
>Step 8/11 : RUN useradd -G www-data,root -u $uid -d /home/$user $user
> ---> Running in 232ef9c7dbd1
>Removing intermediate container 232ef9c7dbd1
> ---> 870fa3220ffa
>Step 9/11 : RUN mkdir -p /home/$user/.composer &&     chown -R $user:$user /home/$user
> ---> Running in 7ca8c0cb7f09
>Removing intermediate container 7ca8c0cb7f09
> ---> 3d2ef9519a8e
>Step 10/11 : WORKDIR /var/www
> ---> Running in 4a964f91edfa
>Removing intermediate container 4a964f91edfa
> ---> 00ada639da21
>Step 11/11 : USER $user
> ---> Running in 9f8e874fede9
>Removing intermediate container 9f8e874fede9
> ---> fe176ff4702b
>
>Successfully built fe176ff4702b
>Successfully tagged travellist:latest

Quando a compilação estiver concluída, você poderá executar o ambiente em segundo plano com:
>docker-compose up -d