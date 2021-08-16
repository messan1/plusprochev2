<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    protected $table = 'transactions';
    protected $primaryKey = 'id';
    protected $fillable = [
        "currency", "has_colis", "colis_quantity",
        "has_courrier", "courrier_number", "description"
    ];



    public function user(){
        return $this->belongsTo(User::class);
    }


    public function offer(){
        return $this->belongsTo(offer::class);
    }
}
