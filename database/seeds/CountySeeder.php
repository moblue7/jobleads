<?php

/**
 * Created by PhpStorm.
 * User: moblue7
 * Date: 4/17/19
 * Time: 7:31 PM
 */
class CountySeeder extends Seeder {

    public function run()
    {

        $county = new App\County;

        $county->name = "ABC";
        $county->state = "JJ";
        $county->tax_rate = 0.25;
        $county->save();

        $income1 = new App\Income;
        $income2 = new App\Income;

        $income1->name = "person1";
        $income1->amount = 100000;
        $income1->county_id = $county->id;
        $income1->save();

        $income2->name = "person2";
        $income2->amount = 10000;
        $income2->county_id = $county->id;
        $income2->save();


        $county->incomes()->asassociate($income1);
        $county->incomes()->asassociate($income2);

        $county->save();



    }

}