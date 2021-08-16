<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testimonial extends Model
{
    use HasFactory;


    protected $table = 'testimonials';
    protected $primaryKey = 'id';


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function offer(){
        return $this->hasOne(Offer::class);
    }
}
