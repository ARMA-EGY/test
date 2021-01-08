<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WebRequest1 extends Model
{
    protected $table = 'web_requests';
    
    protected $fillable = [
        'name','phone','email','company','want_to','describe','services','three_websites','guides','budget','ideal_date','notes',
    ];
}
