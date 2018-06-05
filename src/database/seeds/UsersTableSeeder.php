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
        factory(App\User::class, 5)->create()->each(function ($u) {
            $number = rand(0,5);
            for($i = 0; $i < $number; $i++){
                $u->orders()->save(factory(App\Order::class)->make());
            }
        });
    }
}
