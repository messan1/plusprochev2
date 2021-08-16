<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trajet extends Model
{
    use HasFactory;

    protected $table = 'trajets';
    protected $primaryKey = 'id';

    public function offer(){
        return $this->hasOne(Offer::class);
    }
}
