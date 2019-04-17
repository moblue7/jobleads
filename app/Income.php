<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{

    protected $table = 'income';

    public function county()
    {
        return $this->belongsTo('App\County');
    }

}
