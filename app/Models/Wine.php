<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wine extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'year',
        'winery_id',
        'color',
        'type',
        'gradation',
        'extract',
        'acidity',
    ];

    public function winery(){
       return $this->belongsTo(Winery::class);
    }

    public function vineyards(){
        return $this->belongsToMany(Vineyard::class);
    }
}
