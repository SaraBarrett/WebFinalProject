<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;   // <--- ADICIONAR ISTO

    protected $fillable = [
        'service_type',
        'start_date',
        'end_date',
        'email',
        'company_name',
        'notes',
    ];
}
