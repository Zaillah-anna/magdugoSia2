<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryModel extends Model
{
    use HasFactory;

    protected $table = 'inventory';
    
    // Uncomment if needed
    // protected $primaryKey = 'inventory_id';
    // public $timestamps = false;

    // Uncomment if mass assignment is required
    // protected $fillable = ['date_recorded', 'product_id'];

    public function product()
    {
        return $this->belongsTo(ProductModel::class, 'product_id');
    }

    public static function getInventoryWithProduct()
    {
        return self::with('product')->get();
    }
}

