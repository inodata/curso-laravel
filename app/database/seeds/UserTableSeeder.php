<?php

class UserTableSeeder extends Seeder {

    public function run() {
    
        DB::table('users')->truncate();
    
         //usamos password planos para sedear porque tenemos un MUTATOR del atributo en el model Users  
        User::create(array(
            'username' => 'Quique Garcia',
            'email' => 'egarcia@demo',
            //'password' => Hash::make('holamundo')
            'password' => 'holamundo',
        ));
        
        User::create(array(
            'username' => 'Migue Escoffie',
            'email' => 'mescoffie@demo',
            //'password' => Hash::make('hola')
            'password' => 'hola',
        ));
    }
}

?>