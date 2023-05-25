<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Winery extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'address',
        'town',
        'district',
        'region',
        'nation',
        'phone_number',
        'mail',
    ];

    public function wines(){
        return $this->hasMany(Wine::class);
    }
}
