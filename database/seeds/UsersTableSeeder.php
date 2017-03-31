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
        \App\User::truncate();

        $user = new \App\User();
        $user->name = "Eric";
        $user->cnpj = "01.236.654/0001-25";
        $user->address = "Rua da alegria, 2110, Patrimônio velho";
        $user->email = "erics9@gmail.com";
        $user->password = bcrypt('123');
        $user->city_id = 1;
        $user->save();

        //factory(\App\User::class, 10)->create([]); //se quiser fazer mais alguns registros
    }
}
