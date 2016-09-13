<?php

use Illuminate\Database\Seeder;
use eventoIFPirapora\Usuarios;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$user = new Usuarios;
        $user->nome = "Admin";
        $user->email = "admin@admin.com";
        $user->password = bcrypt('123456');
        $user->save();
    }
}
