<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bicycle extends Model
{
    use softDeletes;

    public function User(){
        return $this->belongsTo('App\User');
    }
    protected $fillable = [
        'user_id',
        'brand',
        'model',
        'color',
        'price'
    ];
}
