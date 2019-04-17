<?php

use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $states = ["California", "Arizona", "Chicago", "Texas", "Hawaii"];


        for($i = 0; $i < 100; $i++) {


            $county = new App\County;

            $county->name = Str::random(8);
            $ind = rand(1,5) - 1;
            $county->state = $states[$ind];

            $tax_rate = mt_rand() / mt_getrandmax();
            $tax_rate *= 0.5;
            $county->tax_rate = $tax_rate;
            $county->save();


            for($j = 0; $j < 20; $j++){


                $income = new App\Income;
                $income->name = Str::random(8);
                $income->amount = rand(10000, 200000);
                $income->county_id = $county->id;
                $income->save();
                $county->incomes()->save($income);



            }
            

        }
    }
}
