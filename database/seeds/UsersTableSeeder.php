<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Cargando Evaluadores por defecto');


        //19791646-k
        //17656727-9
        //8388579-3
        //7631797-6
        //24339697-2
        //23508623-9
        //5037041-0
        //14764842-1




        $user = new User();
        $user->name = 'Evaluador 1';
        $user->email = 'mail@enovus1.cl';
        $user->email_verified_at = \Carbon\Carbon::now()->format('Y-m-d H:i:s');
        $user->rut = '19791646-K';
        $user->password = Hash::make('1646');
        $user->estado = true;
        $user->perfil = 'Evaluador';
        $user->cargo_id = 1;
        $user->user_id = null;
        $user->save();


        $user = new User();
        $user->name = 'Evaluador 2';
        $user->email = 'mail@enovus2.cl';
        $user->email_verified_at = \Carbon\Carbon::now()->format('Y-m-d H:i:s');
        $user->rut = '17656727-9';
        $user->password = Hash::make('6727');
        $user->estado = true;
        $user->perfil = 'Evaluador';
        $user->cargo_id = 1;
        $user->user_id = null;
        $user->save();


        $this->command->info(' Evaluadores por defecto cargados exitosamente');


        /*********Usuarios Evaluados*********/


        $this->command->info('Cargando Evaluadores por evaluar');

        $user = new User();
        $user->name = 'Evaluado 1';
        $user->email = 'mail@enovus3.cl';
        $user->email_verified_at = \Carbon\Carbon::now()->format('Y-m-d H:i:s');
        $user->rut = '8388579-3';
        $user->password = Hash::make('8579');
        $user->estado = true;
        $user->perfil = 'Evaluado';
        $user->cargo_id = 2;
        $user->user_id =  1;
        $user->save();


        $user = new User();
        $user->name = 'Evaluado 2';
        $user->email = 'mail@enovus4.cl';
        $user->email_verified_at = \Carbon\Carbon::now()->format('Y-m-d H:i:s');
        $user->rut = '7631797-6';
        $user->password = Hash::make('1797');
        $user->estado = true;
        $user->perfil = 'Evaluado';
        $user->cargo_id = 2;
        $user->user_id =  1;
        $user->save();


        $user = new User();
        $user->name = 'Evaluado 3';
        $user->email = 'mail@enovus5.cl';
        $user->email_verified_at = \Carbon\Carbon::now()->format('Y-m-d H:i:s');
        $user->rut = '24339697-2';
        $user->password = Hash::make('9697');
        $user->estado = true;
        $user->perfil = 'Evaluado';
        $user->cargo_id = 2;
        $user->user_id =  1;
        $user->save();


        $user = new User();
        $user->name = 'Evaluado 4';
        $user->email = 'mail@enovus6.cl';
        $user->email_verified_at = \Carbon\Carbon::now()->format('Y-m-d H:i:s');
        $user->rut = '23508623-9';
        $user->password = Hash::make('8623');
        $user->estado = true;
        $user->perfil = 'Evaluado';
        $user->cargo_id = 3;
        $user->user_id =  2;
        $user->save();


        $user = new User();
        $user->name = 'Evaluado 5';
        $user->email = 'mail@enovus7.cl';
        $user->email_verified_at = \Carbon\Carbon::now()->format('Y-m-d H:i:s');
        $user->rut = '5037041-0';
        $user->password = Hash::make('7041');
        $user->estado = false;
        $user->perfil = 'Evaluado';
        $user->cargo_id = 3;
        $user->user_id =  2;
        $user->save();


        $user = new User();
        $user->name = 'Evaluado 6';
        $user->email = 'mail@enovus8.cl';
        $user->email_verified_at = \Carbon\Carbon::now()->format('Y-m-d H:i:s');
        $user->rut = '14764842-1';
        $user->password = Hash::make('4842');
        $user->estado = true;
        $user->perfil = 'Evaluado';
        $user->cargo_id = 3;
        $user->user_id =  2;
        $user->save();


        $this->command->info('Usuarios por evaluar cargados exitosamente');



        $user = new User();
        $user->name = 'admin';
        $user->email = 'mail@enovus.cl';
        $user->email_verified_at = \Carbon\Carbon::now()->format('Y-m-d H:i:s');
        $user->rut = '1-9';
        $user->password = Hash::make('admin@');
        $user->estado = true;
        $user->perfil = 'Administrador';
        $user->cargo_id = 1;
        $user->user_id = null;
        $user->save();
    }
}
