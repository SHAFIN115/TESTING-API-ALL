<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class DeviceController extends Controller
{
    public function list($id=null){
        $model1 = User::all(); 
        $model2 = User::find($id); 
        return $id ? $model2 : $model1;  
    }
    public function add(Request $request){
        $user1 = new User;
        $user1->name = $request->name;
        $user1->email = $request->email;
        $user1->password = bcrypt($request->password);
        $result = $user1->save();
        if ($result) {
            return ["Result" => "DATA HAS BEEN SAVED"];
        } else {
            return ["Result" => "Operation failed"];
        }
    }
    public function update(Request $request){

        $user1=User::find($request->id);
        $user1->name=$request->name;
        $user1->email=$request->email;
        $user1->password=$request->password;
        $result=$user1->save();

        if($result){
            return ["Result" => "DATA HAS BEEN UPDATED"];
        }
        else{
            return ["Result"=>"DATA UPDATED FAILED"];
        }
        

    }
    public function testData(Request $request){
        $rules=array(
            "email"=>"required|min:2|max:4"
        );    
        $validator=Validator::make($request->all(),$rules);
        if($validator->fails()){
            return $validator->errors();
        }
        else{
            return ["x"=>"y"]; 
        }
        
        
    }







}
