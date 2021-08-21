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

    //Mutators & Accessors
    protected $appends = ['ratio_eur', 'total_cost'];

    public function getRatioEurAttribute()
    {
        return change($this->currency, 'EUR', 1, $this->published_at);
    }

    public function getColisCostAttribute() {
        return $this->has_colis ?
            $this->colis_quantity * change(
                $this->offer()->currency,
                $this->currency,
                $this->offer()->colis_ttc,
                $this->order_at
            ) : 0;
    }

    public function getCourrierCostAttribute() {
        return $this->has_courrier ?
            $this->courrier_quantity * change(
                $this->offer()->currency,
                $this->currency,
                $this->offer()->courrier_ttc,
                $this->order_at
            ) : 0;
    }

    public function getInsuranceCostAttribute() {
        return $this->has_insurance ?
            $this->insurance_unit_cost /* * change(
                $this->offer()->currency,
                $this->currency,
                $this->offer()->courrier_ttc,
                $this->orderet_at
            )*/ : 0;
    }

    public function getTotalCostAttribute() {
        return
            $this->getColisCostAttribute() +
            $this->getCourrierCostAttribute() +
            $this->getInsuranceCostAttribute() +
            $this->getFraisService();
    }

}
