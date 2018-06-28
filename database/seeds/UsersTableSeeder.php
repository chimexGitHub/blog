<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user = App\User::create([
          'name' => 'Chimex',
          'email' => 'okekechimezieglory@gmail.com',
          'password' => bcrypt('chimex'),
          'admin' => 1
      ]);

      App\Profile::create([
            'user_id' => $user->id,
            'about' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio non iste hic facere rerum dicta omnis, sunt similique, illo nemo tenetur quisquam iure voluptate. Magni voluptate corporis rerum recusandae ipsa!',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com',
            'avatar' => 'uploads/avatars/avatar.png'
      ]);
    }
}
