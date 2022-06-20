<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use softDeletes;

    public function Users(){
        return $this->hasMany('App\User');
    }
    protected $fillable = [
        'name'
    ];
    protected static function booted()
    {
        static::deleting(function ($country) {
            if ($country->users()->exists()) {
                throw new \Exception('Related Users found');
            }
        });
    }
}
