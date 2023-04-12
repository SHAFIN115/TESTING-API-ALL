<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use App\Models\User;

class DeviceController extends Controller
{
    public function list($id=null){
        $model1 = User::all(); 
        $model2 = User::find($id); 
        return $id ? $model2 : $model1;  
    }
}
