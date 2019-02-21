<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 5)
            ->create()
            ->each(function($user){
                $user->companies()->saveMany(factory(App\Company::class, rand(1, 10))->make());
            });
    }
}
