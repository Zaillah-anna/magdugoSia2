<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;
    
    protected $table = 'users';
    protected $primaryKey = 'user_id';
    public $timestamps = true;
    protected $fillable = [
        'role',
        'Firstname',
        'Middlename',
        'Lastname',
        'contact_no',
        'Address',
        'log_id',
        'inventory_id',
    ];

    
}


