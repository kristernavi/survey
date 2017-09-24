<?php

use Illuminate\Database\Seeder;

class PurokTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        # code...
        $purok = new \App\PuroK;
        $purok->number = 1;
        $purok->save();
        $purok = new \App\PuroK;
        $purok->number = 2;
        $purok->save();
        $purok = new \App\PuroK;
        $purok->number = 3;
        $purok->save();
        $purok = new \App\PuroK;
        $purok->number = 4;
        $purok->save();
        $purok = new \App\PuroK;
        $purok->number = 5;
        $purok->save();
        $purok = new \App\PuroK;
        $purok->number = 6;
        $purok->save();
    }
}
