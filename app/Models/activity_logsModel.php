<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\InventoryModel;

class activity_logsModel extends Model
{
    use HasFactory;

    protected $table = 'activity_logs'; // Ensure this matches your database table

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function inventory()
    {
        return $this->belongsTo(InventoryModel::class, 'inventory_id');
    }

    public static function getActivityLogs()
    {
        return self::with('user', 'inventory')->get(); 
    }
}
