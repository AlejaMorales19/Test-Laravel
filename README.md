## Proyecto TestLaravel

Se comprobó que tenía instalado node js y composer, una vez comprobado esto se creó un nuevo proyecto utilizando el código `Laravel new TestLaravel.` Luego se abrió el proyecto en el editor de preferencia, en este caso Visual Studio Code. Luego se desplego la terminal de VSC con Ctrl Ñ y allí usamos el comando php artisan serve para iniciar el servidor de pruebas de laravel el cual se abrió en el servidor local, es decir, localhost.  localhost:8000.

![](https://github.com/AlejaMorales19/Test-Laravel/blob/master/img/imagen1.png?raw=true)

En la terminal de laravel, se utilizó el código `phpunit.` Primero se crearon test generales para correr los test de prueba. con dos comandos diferentes, Tener en cuenta que los dos puntos, significan que hemos ejecutado dos pruebas.

![](https://github.com/AlejaMorales19/Test-Laravel/blob/master/img/imagen5.png?raw=true)
 
Seguido de esto se creo un nuevo archivo de Test con el código `php artisan make:test UserTest` con este código se creó el nuevo archivo en la carpeta test, luego se verificaron los test con el código` php artisan test`, allí debe aparecer el que se creó.

### Test Unitarios

Para crear los test unitarios se  utilizo el siguiente comando ` php artisan make:test UserTest --unit`, posteriormente se elimino el cambio realizado anteriormente en la línea 18 del código.




Ejecutamos el siguiente comando para crear una “ui” Interfaz de usuario
`composer require laravel u/i`
U – Usuario
I – Interfaz

![](https://github.com/AlejaMorales19/Test-Laravel/blob/master/img/imagen6.png?raw=true)

Luego se creo una interfaz de autenticación reactiva con el código `php artisan ui react --auth`, se inició el` npm install ` para instalar las dependencias, y posterior a esto se abre el servidor de frontend con el comando `npm run dev`.




### Base de datos

Se crea la base de datos en php myAdmin con el nombre testlaravel, luego, nos aseguramos que la base de datos  tenga el nombre escrito correctamente en el archivo .env de el codigo.

Una vez que se comprobó esto, se realizó la migración de la base de datos con el código `php artisan migrate` Y en la carpeta test – archivo UserTest se cambio test_example por test_login_form(), se escribio login entre los paréntesis de la línea 18 y se cambio el valor 200 por 500 en la línea 20.

Seguido de esto se crearon usuarios en este mismo archivo con la función llamada `test_user_duplication`. 

Se comprobaron los test una vez más con el código `php artisan test` y se evidencio que esta todo correcto como se muestra en la siguiente captura.


![](https://github.com/AlejaMorales19/Test-Laravel/blob/master/img/imagen3.png?raw=true)
 