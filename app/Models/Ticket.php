<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = 'tickets';

    protected $fillable = 
    [
        'serial',
        'subject', 
        'caller', 
        'category', 
        'department',
        'priority',
        'state',
        'assign_to',
        'description',
        'created_by',
    ];
}
