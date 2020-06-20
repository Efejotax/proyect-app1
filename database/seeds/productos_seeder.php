<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class productos_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Faker::create();
for($i=0; $i < 100; $i++) {
\DB::table('productos')->insert(array(
'nombre' => $faker->firstNameFemale,
'sabor' => $faker->randomElement(['chocolate','vainilla','cheesecake']),
'created_at' => date('Y-m-d H:m:s'),
'updated_at' => date('Y-m-d H:m:s')
));
$id = DB::getPdo()->lastInsertId();
}
    }
}
