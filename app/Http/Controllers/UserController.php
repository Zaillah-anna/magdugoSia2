<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\activity_logsModel;
use App\Models\InventoryModel;
use App\Models\ProductModel;

class UserController extends Controller
{

        public function getUsers()
        {
            $users = DB::select("SELECT * FROM users  INNER JOIN activity_logs on activity_logs.log_id = users.log_id");
           
    
            return response()->json(['success' => true, 'users' => $users], 200);
        }
    
        public function getProducts()
    {
    
            $product= DB::select("SELECT * FROM product");

            return response()->json([
                'success' => true,
                'data' => $product
            ], 200);

            
        }
    

    
        public function getInventorywithProduct()
        {
            $inventory = InventoryModel::getInventorywithProduct();
        
            return response()->json([
                'success' => true,
                'inventory' => $inventory
            ], 200);

            
        }
         

        public function getActivityLogs()
    {
        $logs = activity_logsModel::getActivityLogs();

        return response()->json(['success' => true, 'logs' => $logs], 200);
    }
}
        
    
        
