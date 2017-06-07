<?php
/**
 * Created by PhpStorm.
 * User: Isaac
 * Date: 7/6/2017
 * Time: 12:44 PM
 */


use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    public function run(){
        User::create(array(
            'username'  => 'admin',
            'email'     => 'admin@admin.com',
            'name'=> 'Administrator',
            'password' => Hash::make('admin'), // Hash::make() nos va generar una cadena con nuestra contraseña encriptada
            'lastname' => 'ADM',
            'role'=>1
        ));
    }

}