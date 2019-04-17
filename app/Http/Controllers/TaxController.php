<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaxController extends Controller
{

    public function index(){

        $tab1 = $this->getOverallTaxState();
        $tab2 = $this->getAverageTaxState();
        $tab3 = $this->getAverageRatePerState();
        $average_rate = $this->getAverageTaxRate();
        $overall_tax = $this->getOverallTax();


        return view("main_page")->with("tab1", $tab1)
                                     ->with("tab2", $tab2)
                                     ->with("tab3", $tab3)
                                     ->with("average_rate", $average_rate[0]->avg_rate)
                                     ->with("overall_tax", $overall_tax[0]->total_tax);

    }



    private function getOverallTaxState(){

        $output = DB::select('select c.state as state, sum(c.tax_rate * i.amount) as total_tax from county c, 
                            income i where c.id = i.county_id group by state');

        return $output;


    }


    private function getAverageTaxState(){

        $output = DB::select('select T.state as state, avg(T.county_tax) as average_tax from (select c.state as state, 
                                    c.name as county_name, sum(c.tax_rate * i.amount) as county_tax from county c, income i where 
                                    c.id = i.county_id group by c.state, c.name) as T group by T.state');


        return $output;

    }

    private function getAverageRatePerState(){

        $output = DB::select('select state, avg(tax_rate) as avg_rate from county group by state');

        return $output;


    }


    private function getAverageTaxRate(){

        $output = DB::select('select avg(tax_rate) as avg_rate from county');

        return $output;

    }

    private function getOverallTax(){

        $output = DB::select('select sum(c.tax_rate * i.amount) as total_tax from county c, 
                                    income i where c.id = i.county_id');

        return $output;


    }





}
