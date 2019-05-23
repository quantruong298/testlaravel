<?php

use Illuminate\Database\Seeder;

class CampaignDetailsTableSeeder extends Seeder
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
            DB::table('CampaignDetails')->insert([
                'campaign_id'=>$faker->numberBetween(1,15),
                'views'=>$faker->numberBetween(0,500000),
                'clicks'=>$faker->numberBetween(0,500000),
                'datetime'=>$faker->dateTimeThisMonth(),
            ]);
        }
    }
}
