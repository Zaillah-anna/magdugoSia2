<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;

    protected $table = 'product';  // Ensure correct table name

    protected $primaryKey = 'product_id'; // Explicitly define the primary key

    public $timestamps = false; // If your table doesn't have created_at and updated_at
}

