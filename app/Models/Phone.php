<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $table = 'phones';
    protected $fillable = [
        'number', 'local_format', 'international_format', 'country_prefix', 'country_code',
        'country_name', 'location', 'carrier', 'line_type', 'status'
    ];
}
