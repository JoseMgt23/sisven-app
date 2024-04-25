<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayMode extends Model
{
    use HasFactory;
    protected $table = "paymode";
    protected $primaryKey = "id_paymode";
    public $timestamps = false;

    protected $fillable = [
        'name',
        'description', // Si tienes una columna 'description' en tu tabla de modos de pago
    ];
}
