<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

**************************************************
### PRUEBA LARAVEL  

## Planteamiento general 

Necesitamos un programa informático para gestionar la API de una plataforma donde: 

- [Un Instructor tiene uno o muchos cursos]

- [Un Curso pertenece a un Instructor]

- [Un Curso tiene muchas lecciones] 

- [Cada Lección tiene un video] 

- [Un Usuario puede marcar un curso como favorito] 

- [Usuarios pueden dejar comentarios y calificaciones sobre Cursos e Instructores ]

# Se necesitará: 

1. **Definir modelos y relaciones necesarias.** 

2. **Definir CRUD y validaciones para curso** 

3. **Recuperar desde el controlador de cursos todos los instructores dados de alta en la plataforma 
y devolverlos en la respuesta, teniendo en cuenta que puede haber millones de registros, 
debiendo optimizarse esta consulta lo máximo posible.** 

4. **Implementar un servicio que calcula el rating promedio de cada curso. (calificaciones)**

 

**Importante**: A efectos de realizar la prueba, para simplificar, no se requiere autenticar 
las peticiones ni validar el usuario que las hace.  

 

**************************************************

 
**************************************************


**************************************************

## LARAVEL PRUEBA 

* Version  10.3.3
   
* php 8.1.31


**COMANDOS EJECUTADOS:** 
  * composer create-project laravel/laravel prueba_laravel			
  * cree o copie el archivo index.php para no ver las carptas o ejecutar la app desde public
  * tambien copie .htaccess
  * en config/database.php modifique la linea :  'engine' => env('DB_ENGINE', 'InnoDB'), (para enviar el error al hacer migrate)

     '# php artisan migrate
    
	 '# php artisan make:migration create_instructor_table	
    
	php artisan make:seeder UsersTableSeeder
    php artisan db:seed  
    php artisan make:seeder InstructorTableSeeder

### Tablas:   (punto 1)

 instructor ---- id, user_id, alguna_referencia 
 
 curso      ---- id, nombre, instructor_id
 
 leccion    ---- id, titulo, contenido, video, curso_id 
 
 favorito   ---- id, user_id, curso_id 
 
 comentario ---- id, tipo_coment, hacia_ci, curso_instructor_id, contenido 
 

composer require laravel/sanctum    (para ejecutar la API)


### direcciones o rutas creadas 

./api/cursos    --> GET, Post, Put, Delete  (punto 2)

./cursos    (Punto 3 y 4)


### .

**.**





