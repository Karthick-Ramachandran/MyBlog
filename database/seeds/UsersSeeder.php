<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user =   App\User::create([
            'name' => 'Karthick',
            'email' => 'blog@blog.com',
            'password' => bcrypt('123456'),
            'admin' => 1
        ]);

        App\Profile::create([
            'user_id' => $user->id,
            'avatar' => 'upload/avatar/my.jpg',
            'about' => 'Freelance Web developer and Entrepreneur'
        ]);
     
    }
}
