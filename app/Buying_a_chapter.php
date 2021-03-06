<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Buying_a_chapter extends Model
{

    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $guarded = [];

    public function chapter() {
        return $this -> belongsTo('App\Chapter');
    }

    public function operation() {
        return $this -> belongsTo('App\Financial_operation');
    }
}
