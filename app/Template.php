<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Template extends Model
{
    //
 
    protected $fillable = [
        'name','image','category_id',
    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
