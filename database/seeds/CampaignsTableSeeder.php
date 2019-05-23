<?php

use Illuminate\Database\Seeder;

class CampaignsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i=1;$i<16;$i++){
            DB::table('Campaigns')->insert([
                'name' => $faker->sentence(4),
                'user_id'=>$faker->numberBetween(1,20),
                'status'=>$faker->numberBetween(1,3),
                'start_day'=>$faker->dateTimeThisYear('-1 month'),
                'end_day'=>$faker->dateTimeThisYear('+1 month'),
                'budget' => $faker->randomNumber(8),
                'bid_amount'=>$faker->randomNumber(6),
                'description'=>$faker->paragraph(3),
                'product_id'=>$faker->unique()->numberBetween(1,30),
                'link'=>$faker->unique()->imageUrl(),
                'banner'=>$faker->text,
                'type_id'=>$faker->numberBetween(1,2),
            ]);
        }
    }
}
