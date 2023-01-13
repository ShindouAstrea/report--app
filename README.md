# Acerca de Este proyecto
 Este proyecto es un sistema de reportes, en donde se muestra a traves de un grafico, datos sobre casos
 de covid 19 en las diferentes regiones de Chile.

# Requisitos

Para poder visualizar el proyecto  se necesitan las siguientes instalaciones:
- [NodeJs](https://nodejs.org/en/)->Para hacer uso de Vite , el framework de carga de recursos de laravel.
- [Git](https://git-scm.com/) -> para poder Clonar el repositorio

- [XAMPP](https://www.apachefriends.org/es/index.html) -> Para Iniciar el servidor de base de datos y tener la instalacion de php

- [Composer](https://getcomposer.org/) -> Para poder tener la linea de comandos de php

- [Visual Studio Code](https://code.visualstudio.com/) -> Para editar el codigo o visualizarlo , tambien puedes ocupar el que desees.


# Primeros Pasos

Primero que todo hay que preparar el ambiente de trabajo:


1. Crea una Carpeta donde guardaras el proyecto ejemplo "report_app"
2. Abre una terminal y posicionate que creaste en el paso anterior.

Ejemplo:    

    cd c:/users/tu_nombre/desktop/report_app

3. Clonar el Repositorio

    ```shell 
    git clone https://github.com/ShindouAstrea/report--app.
    ```
4. Instalar las dependencias de Laravel
    ```shell 
    composer i
    ```
5. Instalar las dependencias de node
    ```shell 
    npm i
    ```
6. Abre la carpeta "report--app" en el editor de texto (Visual Studi Code, Sublime text , etc)
7. Crea un archivo .env y copia todo el codigo del archivo .env.example ubicado en la raiz del proyecto.

# Configuracion

Una vez que esten las dependencias listas y el proyecto existosamente clonado:

1. Abre Xampp con permisos de administrados y apreta "start" en  Apache y Mysql
2. Abre una termina en la carpeta de este proyecto
3. Ejecuta el siguiente comando e
    ```shell 
    php artisan migrate:fresh --seed
    ```
Esto ultimo lo que hara es borrar las tablas en la bd ya existente (si es que existe ), volverlas a crear e insertar los datos desde el modelo.

4.  Abre otra terminal dentro de esta carpeta y Ejecuta el siguiente comando
    ```shell 
    npm run dev
    ```
Esto lo que hará será abrir ejecutar el servidor de Vite para compilar los recursos del proyecto

5. Finalmente ejecuta este comando para levantar el servidor de laravel que se ejecutara en el puerto 8000 por defecto
    ```shell 
    php artisan serve
    ```
# Problemas A mejorar
-   Los filtros no tienen uso , se puede extraer los datos pero se debe rehacer la tabla.
-   El eje x del grafico no actualiza y muestra correctamente los nombres de los meses.
-   El grafico es estatico, no se actualiza con los filtros








