<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DamagestModel extends Model
{
    use HasFactory;
    protected $table = 'damages';
    // protected $primaryKey = 'damages_id';
    // public $timestamps = false;
    // protected $fillable = [
    //     'damage_product',
    //     'product_id',
    // ];
}
