<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Financial_operation_status extends Model
{

    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $guarded = [];

    public function operations() {
        return $this -> hasMany('App\Financial_operation', 'status_id');
    }
}
