<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
    // protected $fillable = ["name", "birth_date"];
    protected $guarded = ["id"];

    

    public function book()

    {
        return $this->hasMany(Books::class);
    }
}
