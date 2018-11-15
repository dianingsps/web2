<?php

use Illuminate\Database\Seeder;

class barang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create(); //import library
		$limit = 9; //batasan pembuatan data palsu
		for ($i = 0; $i <$limit; $i++){
			DB::table('barangs')->insert([ //isi datadi database
			'nama_barang' =>$faker->name,
			'stock' =>$faker->unique()->numberBetween($min = 1000, $max = 9000), //email uniquesupaya tidak ada yang sama
			'harga' =>$faker->numberBetween($min = 1000, $max = 9000),
			'expired_date' =>$faker->dateTimeAD($max = 'now', $timezone = null),
			'tanggal_produksi' =>$faker->dateTimeAD($max = 'now', $timezone = null),
			]);
		}
    }
}
