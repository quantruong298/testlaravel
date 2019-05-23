<?php

use Illuminate\Database\Seeder;

class ReportHoursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i=1;$i<50;$i++){
            DB::table('ReportHours')->insert([
                'campaign_id'=>$faker->numberBetween(1,15),
                'datetime'=>$faker->dateTimeThisMonth(),
                'sum_views'=>$faker->numberBetween(0,1000),
                'sum_clicks'=>$faker->numberBetween(0,1000),
            ]);
        }
    }
}
