<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;
    protected $table = "paymode";
    protected $primaryKey = "id_paymode";
    public $timestamps = false;

    protected $fillable = [
        'document_number',
        'first_name',
        'last_name',
        'address',
        'birthday',
        'phone_number',
        'email',
    ];

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
