# Sistema de Reporte anual



## Requerimientos

El sistema esta hecho en Laravel  10  por lo cual se necesita ua version minima de php 8.1

## Instrucciones

Para un facil montaje de un entorno de desarrollo se utilizo Sails para crear un entorno dockerizado 

para instalar [sails](https://laravel.com/docs/10.x/sail#installing-sail-into-existing-applications)
en un desarrollo ya creado se hace lo siguiente:

```bash
 composer require laravel/sail --dev
```
```bash
 php artisan sail:install
```
```bash
./vendor/bin/sail up
```

*si es necesario hay que detener servicios de apache o mysql 

```bash
 service apache2 stop
```

```bash
 service mysql stop
```


Ejecutar las migraciones

```bash
 ./vendor/bin/sail migrate
```


Ejecutar vite para los modulos de Vuejs

```bash
./vendor/bin/sail npm run dev
```

El sistema dederia verse en http://localhost/


*el Diagrama ER se encuentra en este repositorio
