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

        "user_id", "trajet_id", "code","currency", "ratio_eur", "has_colis", "colis_unit_cost", "has_courrier", "colis_quantity",
        "colis_ttc", "has_courrier", "courrier_unit_cost","delivery_condition", "courrier_quantity",
        "delivery_address","courrier_ttc", "status", "delivery_address"
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
