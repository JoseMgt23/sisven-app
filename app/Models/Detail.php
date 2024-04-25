<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;
    protected $table = "details";
    protected $primaryKey = "id_detail";
    public $timestamps = false;

    protected $fillable = [
        'id_invoices',
        'id_products',
        'quantity',
        'price',
    ];


    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }

    // Relación con el producto
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
