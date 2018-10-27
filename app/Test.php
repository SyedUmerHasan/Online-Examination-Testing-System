<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = 'test';
    protected $primaryKey = 'test_id';
    
    public function options()
    {
        return $this->hasMany('App\Answer', 'test_id', 'test_id');
    }
}
