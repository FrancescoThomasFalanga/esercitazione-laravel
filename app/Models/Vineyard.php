<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vineyard extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'desc'];

    public function wines(){
        return $this->belongsToMany(Wine::class);
    }
}
