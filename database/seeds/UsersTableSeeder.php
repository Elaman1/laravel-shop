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
        DB::table('users')->insert([
            'name' => 'Администратор',
            'email' => 'admin2@mail.ru',
            'password' => bcrypt('admin@mail.ru'),
            'is_admin' => 1,
        ]);
    }
}
