<?php

use Illuminate\Database\Seeder;

class BarangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Barang::class, 50)->create()->each(function ($u) {
	        $u->posts()->save(factory(App\Barang::class)->make());
	    });
    }
}
