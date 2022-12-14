<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;


    protected $table = 'agenda';
    protected $primaryKey = 'id';

    protected $fillable=[
        'title',
        'description',
        'start',
        'end',
        'color'
    ];

}
