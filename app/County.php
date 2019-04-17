<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    //

    protected $table = 'county';

    public function incomes()
    {
        return $this->hasMany('App\Income');
    }
}
