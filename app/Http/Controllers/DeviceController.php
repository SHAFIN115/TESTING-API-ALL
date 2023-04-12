<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use App\Models\User; // Add this line to import the User model

class DeviceController extends Controller
{
    public function list(){
        $model1 = user::all(); // Change "users" to "User" and use correct capitalization
        return $model1;
    }
}
