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
        $faker = Faker\Factory::create();
        DB::table('Users')->insert([
            'email' => $faker->email,
            'password' => bcrypt('secret'),
            'fullname'=>$faker->name,
            'phone_number'=>$faker->phoneNumber,
            'role_id'=>$faker->numberBetween(1,3),
        ]);
    }
}
