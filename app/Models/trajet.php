<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trajet extends Model
{
    use HasFactory;

    protected $table = 'trajets';
    protected $primaryKey = 'id';
    protected $fillable = ['depart', 'destination', 'plane_ticket', 'arrived_at'];
    
    public function offer(){
        return $this->hasOne(Offer::class);
    }
}
