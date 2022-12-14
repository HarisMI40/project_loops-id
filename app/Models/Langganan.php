<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Langganan extends Model
{
    use HasFactory;
    public $keyType = 'string';

    protected $fillable = ['id', 'judul', 'harga', 'durasi', 'warna'];
}
