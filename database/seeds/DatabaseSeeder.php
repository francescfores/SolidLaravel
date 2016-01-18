<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);
        $faker = Faker\Factory::create();
        $this->seedInvoicess($faker);
    }

    private function seedInvoicess($faker){
        foreach (range(1,10) as $number){
            $task= new \App\Invoicess();
            $task-> name= $faker->sentence;
            $task-> totalAmount= $faker->randomNumber;
            $task->save();
        }
    }
}
