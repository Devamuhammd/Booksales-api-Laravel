<?php

// app/Models/Transaksi.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;
use App\Models\Product;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'jumlah',
        'total_harga',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}


