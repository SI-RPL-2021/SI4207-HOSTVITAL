<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    
    use HasFactory;
    protected $table = 'cart';
    protected $guarded = [];
    
    public function obat()
    {
        return $this->belongsTo(Obat::class, 'obat_id','id');
    }
}
