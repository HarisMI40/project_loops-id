<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Langganan;


class Berlangganan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'id_langganan',
        'status'
    ];

    public function langganan(){
        return $this->belongsTo(Langganan::class, 'id_langganan', 'id');
    }
}
