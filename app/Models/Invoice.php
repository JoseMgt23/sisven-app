<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $table = "invoice";
    protected $primaryKey = "id_invoice";
    public $timestamps = false;

    protected $fillable = [
        'number',
        'id_customers',
        'id_paymode',
    ];

    // Definir la relación con la tabla de detalles (details)
    public function details()
    {
        return $this->hasMany(Detail::class);
    }

    // Definir la relación con la tabla de clientes (customers)
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    // Definir la relación con la tabla de modos de pago (pay_modes)
    public function payMode()
    {
        return $this->belongsTo(PayMode::class);
    }

}
