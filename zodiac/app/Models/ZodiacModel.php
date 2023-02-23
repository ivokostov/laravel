<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZodiacModel extends Model
{
    use HasFactory;
    protected $table = 'zodiac';

    public function getRouteKeyName()
    {
        return 'id';
    }
}
