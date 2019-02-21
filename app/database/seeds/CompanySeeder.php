<?php

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Company::class, 5)
            ->create()
            ->each(function($company){
                $company->users()->saveMany(factory(App\User::class, rand(5, 50))->make());
            });
    }
}
