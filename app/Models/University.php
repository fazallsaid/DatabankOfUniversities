<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class University extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'university';

    protected $primaryKey = 'university_id';
    
    protected $fillable = [
        'university_name',
        'university_acronym',
        'university_address',
    ];
}