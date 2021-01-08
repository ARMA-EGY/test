<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class socialrequest1 extends Model
{
    protected $table = 'social_requests';
    
    protected $fillable = [
        'name','phone','email','company','plan','platform_num','facebook','instagram','paid_posts','normal_posts','design','content','moderating','duration','notes',
    ];
}
