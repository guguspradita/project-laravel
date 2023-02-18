<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'Ir. Gugus Pradita',
            'email' => 'guguspradita19@gmail.com',
            'password' => bcrypt('rahasia')
        ]);

        User::create([
            'name' => 'Ryan Ardiansyah S.Kom',
            'email' => 'ryanardiansyah@gmail.com',
            'password' => bcrypt('rahasia')
        ]);

        Category::create([
            'nama' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'nama' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama Postingan',
            'slug' => 'judul-pertama-postingan',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita reprehenderit quibusdam quae! Quidem rem aut neque esse eveniet quia sequi, quae molestias iure itaque incidunt inventore reprehenderit et eius rerum.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, praesentium exercitationem. Facere quis consectetur ratione a dolor culpa neque aperiam rerum velit nisi nesciunt incidunt, illo, quasi mollitia in architecto saepe vitae et iusto. Voluptate, ex quas dignissimos ducimus et distinctio ea soluta ab vero doloremque delectus optio veniam nostrum ipsum qui velit? Quod libero beatae asperiores, aperiam tempore mollitia, fuga non esse, doloribus expedita accusamus corporis numquam amet fugit.',
            'category_id' => 1,
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Judul Postingan Kedua Seeder',
            'slug' => 'judul-postingan-kedua-seeder',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita reprehenderit quibusdam quae! Quidem rem aut neque esse eveniet quia sequi, quae molestias iure itaque incidunt inventore reprehenderit et eius rerum.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, praesentium exercitationem. Facere quis consectetur ratione a dolor culpa neque aperiam rerum velit nisi nesciunt incidunt, illo, quasi mollitia in architecto saepe vitae et iusto. Voluptate, ex quas dignissimos ducimus et distinctio ea soluta ab vero doloremque delectus optio veniam nostrum ipsum qui velit? Quod libero beatae asperiores, aperiam tempore mollitia, fuga non esse, doloribus expedita accusamus corporis numquam amet fugit.',
            'category_id' => 1,
            'user_id' => 2,
        ]);

        Post::create([
            'title' => 'Judul Postingan Ketiga',
            'slug' => 'judul-postingan-ketiga',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita reprehenderit quibusdam quae! Quidem rem aut neque esse eveniet quia sequi, quae molestias iure itaque incidunt inventore reprehenderit et eius rerum.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, praesentium exercitationem. Facere quis consectetur ratione a dolor culpa neque aperiam rerum velit nisi nesciunt incidunt, illo, quasi mollitia in architecto saepe vitae et iusto. Voluptate, ex quas dignissimos ducimus et distinctio ea soluta ab vero doloremque delectus optio veniam nostrum ipsum qui velit? Quod libero beatae asperiores, aperiam tempore mollitia, fuga non esse, doloribus expedita accusamus corporis numquam amet fugit.',
            'category_id' => 2,
            'user_id' => 1,
        ]);
    }
}
