<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tecnologia;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Administrador',
            'email' => 'administrador@example.com',
            'admin'=> true,
            'password'=>bcrypt('12345678'),
        ]);
        
       $tecnologias = ['Java', 'JavaScript', 'PHP', 'Laravel', 'Vue', 'Css'];
       foreach ($tecnologias as $tecnologia) {
             Tecnologia::create(['nombre' => $tecnologia]);
       }  
          // Crear un post
        Post::create([
            'titulo' => 'Java',
            'contenido' => 'Java es uno de los lenguajes de programación más populares y ampliamente usados en el mundo del desarrollo de software. Fue creado por James Gosling y su equipo en Sun Microsystems en 1995, con la idea de ser un lenguaje sencillo, seguro y que pueda ejecutarse en cualquier dispositivo sin importar la plataforma.
            Java está basado en la programación orientada a objetos, lo que facilita la creación de programas modularizados y reutilizables. Gracias a la máquina virtual de Java (JVM), el código compilado puede ejecutarse en cualquier sistema operativo que tenga instalada la JVM, cumpliendo con el lema "Escribe una vez, ejecuta en cualquier lugar".
            Java maneja automáticamente la gestión de memoria con su recolector de basura y tiene un sistema fuerte de manejo de excepciones que ayuda a crear aplicaciones más estables y seguras. También soporta programación concurrente mediante hilos, permitiendo que las aplicaciones realicen múltiples tareas al mismo tiempo.
            Se utiliza en aplicaciones web y empresariales, desarrollo de aplicaciones móviles (especialmente en Android), software de escritorio, y sistemas embebidos o dispositivos IoT.
            Aprender Java es beneficioso porque tiene una gran comunidad, excelente documentación, y soporte para tecnologías modernas como inteligencia artificial y big data. Además, es una base sólida para aprender otros lenguajes orientados a objetos y trabajar en proyectos de software reales.',
            'tecnologias_id' => 1,
            'user_id' => 1,
        ]);
            Post::create([
            'titulo' => 'JavaScript',
            'contenido' => 'JavaScript es un lenguaje de programación muy popular que se utiliza principalmente para el desarrollo web. Es un lenguaje interpretado que se ejecuta en el navegador del cliente, permitiendo crear páginas web dinámicas e interactivas. Además, con tecnologías como Node.js, JavaScript también se puede usar para desarrollo del lado del servidor.
            JavaScript soporta paradigmas de programación orientada a objetos, funcional y basada en eventos, lo que lo hace muy flexible. Tiene una gran comunidad y un ecosistema extenso de bibliotecas y frameworks como React, Angular y Vue.js.
            Aprender JavaScript es esencial para cualquier desarrollador web moderno y permite crear aplicaciones web completas, desde el frontend hasta el backend.',
            'tecnologias_id' => 2,
            'user_id' => 1,
        ]);
            Post::create([
            'titulo' => 'PHP',
            'contenido' => 'PHP es un lenguaje de programación de código abierto ampliamente usado para el desarrollo web del lado del servidor. Fue diseñado originalmente para crear páginas web dinámicas y hoy en día es la base de muchos sistemas de gestión de contenido como WordPress, Drupal y Joomla.
            PHP es fácil de aprender para principiantes y tiene una sintaxis sencilla. Ofrece una gran cantidad de funciones integradas y se integra bien con bases de datos como MySQL. También soporta programación orientada a objetos y tiene un ecosistema robusto de frameworks como Laravel y Symfony.
            Aprender PHP es útil para construir aplicaciones web sólidas y escalables, especialmente en entornos donde se usa software open source.',
            'tecnologias_id' => 3,
            'user_id' => 1,
            ]);
       
    }   


}
