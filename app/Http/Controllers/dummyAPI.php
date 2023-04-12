<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyAPI extends Controller
{
    function getData(){
        return ["name"=>"shafin",
                "roll"=>"1707115",
                "HomeTown"=>"Barisal",
                "Hall_Attached_to"=>"Lalon Shah Hall",
                "College"=>"DRMC",
                "University"=>"KUET"
    
    
    ];

    }
}
