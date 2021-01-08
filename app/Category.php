<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Template;

class Category extends Model
{
    //

    protected $fillable = ['name'];


    public function templates()
    {
        return $this->hasMany(Template::class);
    }
}
