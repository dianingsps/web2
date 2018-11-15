<?php

use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create(); //import library
		$limit = 7; //batasan pembuatan data palsu
		for ($i = 0; $i <$limit; $i++){
			DB::table('model_mahasiswas')->insert([ //isi datadi database
			'nama' =>$faker->name,
			'email' =>$faker->unique()->email, //email uniquesupaya tidak ada yang sama
			'nohp' =>$faker->phoneNumber,
			'alamat' =>$faker->address,
			'hobi' =>$faker->name,
			]);
		}
    }
}
