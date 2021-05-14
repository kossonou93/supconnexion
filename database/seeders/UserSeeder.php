<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('intervenants')->insert([
            'name'     => 'Kossonou',
            'email'    =>  'martinkossonou2@gmail.com',
            'password' => Hash::make('mk080244.'),
        ]);
        

        DB::table('regions')->insert(
            array(
                array('name'     => 'Région des Lagunes'),
                array('name'     => 'Région des Lacs'),
                )
        );

        DB::table('villes')->insert(
            array(
                array('name'     => 'Abidjan'),
                array('name'     => 'Bouaké'),
                array('name'     => 'Bondoukou'),
                array('name'     => 'Grand Bassam'),
                array('name'     => 'Korogho'),
                array('name'     => 'Yamoussoukro'),
                )
        );

        DB::table('communes')->insert(
            array(
                array('name'     => 'Abobo'),
                array('name'     => 'Adjamé'),
                array('name'     => 'Aboisso'),
                array('name'     => 'Bouaké'),
                array('name'     => 'Cocody'),
                array('name'     => 'Bondoukou'),
                array('name'     => 'Grand Bassam'),
                array('name'     => 'Korogho'),
                array('name'     => 'Yamoussoukro'),
                )
        );
    }
}
