<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $table = 'offers';
    protected $primaryKey = 'id';
    protected $fillable = [
        "currency", "has_colis", "colis_unit_cost", "colis_quantity", "has_courrier",
        "delivery_condition", "delivery_address"
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function trajet(){
        return $this->belongsTo(trajet::class);
    }


    public function testimonial(){
        return $this->belongsTo(testimonial::class);
    }

    public function transactions(){
        return $this->hasMany(transaction::class);
    }

    //Mutators & Accessors
    protected $appends = ['ratio_eur'];

    public function getRatioEurAttribute()
    {
        return change($this->currency, 'EUR', 1, $this->published_at);
    }
}
