<?php
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(FAKER $faker)
    {
        for($i=0;$i<10;$i++){
            DB::table('rooms')->insert(
                [
                    'name'=>$faker->name,
                    'typeroom'=>$faker->title,
                    'image'=>Str::random(10),
                    'number'=>$faker->numberBetween($min=1,$max=20),
                    'area'=>$faker->numberBetween($min=100,$max=150),
                    'price'=>$faker->numberBetween($min=200000,$max=300000)
                ]
                );
    }
}
}